<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 



class ProductController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        $brands = ProductBrand::all();

        return view('admin.products.index', compact('categories', 'brands'));
    }

    public function show()
    {
        return datatables()->of(
            Product::query()->with('brand', 'category')->orderBy('id', 'desc')
        )->toJson();
    }

    public function detail($id)
    {
        $product = Product::with('brand', 'category', 'productImages')->find($id);
        if($product == null){
            return abort(404);
        }
        $categories = ProductCategory::all();
        $brands = ProductBrand::all();


        return view('admin.products.detail', compact('brands', 'categories', 'product'));
    }

    public function store(Request $req)
    {
        // return $req->all();
        $id = $req->id;
        $name = $req->name;
        $sku = $req->sku;
        $cat = $req->cat;
        $brand = $req->brand;
        $price = $req->price;
        $detail = $req->productdesc;

        $is_active = $req->is_active;
        $is_stock = $req->is_stock;
        $is_new = $req->is_new;
        $is_recommend = $req->is_recommend;

        DB::beginTransaction();

        $product = Product::find($id);

        if ($product == null) {
            if (Product::where('name', $name)->first()) {
                $data = [
                    'title' => 'ผิดพลาด!',
                    'msg' => 'ชื่อสินค้านี้ถูกใช้แล้ว',
                    'status' => 'warning',
                ];
                // return redirect()->back()->withError('ชื่อสินค้านี้ถูกใช้แล้ว!');
                return $data;
            }
            if (Product::where('sku', $sku)->first()) {
                $data = [
                    'title' => 'ผิดพลาด!',
                    'msg' => 'รหัสสินค้านี้ถูกใช้แล้ว',
                    'status' => 'warning',
                ];
                // return redirect()->back()->withError('รหัสสินค้านี้ถูกใช้แล้ว!');
                return $data;
            }

            $product = new Product;
            $product->is_active = 1;
            $product->save();
            $product_id = $product->id;
            $product = Product::find($product_id);

            $path = 'hbImages/products/' . $product->id . '/';
            if ($req->hasFile('imageFile')) {
                $imageName = time() . '.' . $req->imageFile->extension();
                Storage::disk('spaces')->putFileAs($path, $req->imageFile, $imageName);
                // $req->imageFile->move(public_path('assets/hbImages/product-brand/'), $imageName);
                $path = 'hbImages/products/' . $product->id . '/' . $imageName;
                $product->img = $path;
            }
            $product->name = $name;
            $product->sku = $sku;
            $product->price = (string) $price;
            $product->product_category_id = $cat;
            $product->product_brand_id = $brand;
            $product->save();

            DB::commit();
        }else{

            $path = 'hbImages/products/' . $product->id . '/';
            if ($req->hasFile('imageFile')) {

                $imageName = time() . '.' . $req->imageFile->extension();
                Storage::disk('spaces')->putFileAs($path, $req->imageFile, $imageName);
                // $req->imageFile->move(public_path('assets/hbImages/product-brand/'), $imageName);
                $path = 'hbImages/products/' . $product->id . '/' . $imageName;
                $product->img = $path;
            }

            $product->name = $name;
            $product->sku = $sku;
            $product->price = (string) $price;
            $product->product_category_id = $cat;
            $product->product_brand_id = $brand;
            $product->detail = $detail;

            if($is_active == 'on'){
                $product->is_active = 1;
            }else{
                $product->is_active = 0;
            }

            if ($is_stock == 'on') {
                $product->is_stock = 1;
            } else {
                $product->is_stock = 0;
            }

            if ($is_new == 'on') {
                $product->is_new = 1;
            } else {
                $product->is_new = 0;
            }

            if ($is_recommend == 'on') {
                $product->is_recommend = 1;
            } else {
                $product->is_recommend = 0;
            }   
     
            $product->save();

            DB::commit();

        }

        $data = [
            'title' => 'บันทึกสำเร็จ!',
            'msg' => 'บันทึกสินค้าสำเร็จ',
            'status' => 'success',
        ];
        // return redirect()->back()->with('success', 'บันทึกสินค้าสำเร็จ!');
        return $data;

    }

    public function update(Request $req)
    {
        
        $id = $req->id;
        $base64Images = $req->base64Images;
        if($base64Images == null){
            return redirect()->back()->with('error', 'ไม่พบรูปภาพ');
        }
        if(ProductImage::where('product_id', $id)->count() >= 4){
            return redirect()->back()->with('error', 'จำนวนรูปภาพเต็มแล้ว');
        }
        if(Product::find($id) != null){
           
            if (count($base64Images) > 0) {
                foreach ($base64Images as $key => $base64_image) {
                    if ($key == 3) {
                        break;
                    }
                    $path = 'hbImages/products/' . $id . '/';
                    if ($base64_image != null && preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                        
                        $data = substr($base64_image, strpos($base64_image, ',') + 1);
                        $base64_decode = base64_decode($data);
                        $extension = explode('/', explode(':', substr($base64_image, 0, strpos($base64_image, ';')))[1])[1];
                        $filename = strtotime(Carbon::now()) . rand(1, 100) . '.' . $extension;
                        // return $filename;
                        Storage::disk('spaces')->put($path . $filename, $base64_decode);
                    } else {
                        dd('Base64 not match');
                    }
                    $fullPath = 'hbImages/products/'.$id. '/' . $filename;
                    $productImg = new ProductImage;
                    $productImg->product_id = $id;
                    $productImg->img = $fullPath;
                    $productImg->save();
                }   
            }
        }


        return redirect()->back()->with('success', 'อัพโหลดรูปภาพสำเร็จ');
    }

    public function destroy(Request $req)
    {

        $id = $req->id;

        $product = Product::find($id);
        if ($product == null) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ลบไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];

            return $data;
        }else{
            $productImages = ProductImage::where('product_id', $id)->get();
            foreach ($productImages as $productImage ) {
                Storage::disk('spaces')->delete($productImage->img);
            }
            ProductImage::where('product_id', $id)->delete();
            Product::find($id)->delete();

            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'ลบสินค้าสำเร็จ',
                'status' => 'success',
            ];

            return $data;
        }
    }

    public function changeStatus(Request $req)
    {

        $id = $req->id;

        DB::beginTransaction();

        $status = 0;
        $product = Product::find($id);
        if($product == null){
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'แก้ไขไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];

            return $data;
        }
        $oldStatus = $product->is_active;

        if ($oldStatus == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $product->is_active = $status;
        $product->save();

        DB::commit();

        $data = [
            'title' => 'สำเร็จ!',
            'msg' => 'แก้ไขสำเร็จ',
            'status' => 'success',
        ];

        return $data;
    }

    public  function destroyImage(Request $req)
    {   
        $id = $req->id;
        $productImage = ProductImage::find($id);
        if($productImage){
            $imgPath = $productImage->img;
            Storage::disk('spaces')->delete($imgPath);
            ProductImage::find($id)->delete();

            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'ลบรูปสินค้าสำเร็จ',
                'status' => 'success',
            ];

            return $data;
        }else{

            $data = [
                'title' => 'ไม่สำเร็จ!',
                'msg' => 'ลบรูปสินค้าไม่สำเร็จ',
                'status' => 'error',
            ];

            return $data;
        }
       

    }

    public function updateProducImg(Request $req)
    {

    }


}
