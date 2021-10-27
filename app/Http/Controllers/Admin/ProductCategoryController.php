<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
{
    public function index()
    {
        return view('admin.product-categories.index');
    }

    public function show()
    {
        return datatables()->of(
            ProductCategory::query()->orderBy('id', 'asc')
        )->toJson();
    }

    public function store(Request $req)
    {

        // return $req->all();
        $validated = $req->validate([
            'name' => 'string|max:40',
        ]);

        $id = $req->id;
        $name = $req->name;
        
    
        $productCat = ProductCategory::find($id);

        if ($productCat == null) {
            if(ProductCategory::where('name', $name)->first()){
                $data = [
                    'title' => 'ผิดพลาด!',
                    'msg' => 'ชื่อนี้ถูกใช้แล้ว',
                    'status' => 'warning',
                ];
                return $data;
            }
            $productCat = new ProductCategory;
            $productCat->is_active = 1;

        }

        DB::beginTransaction();

        // // $path = '';
        // $path = 'images/categories/';
        // if ($req->hasFile('imageFile')) {
        //     $imageName = time() . '.' . $req->imageFile->extension();
        //     $req->imageFile->move(public_path('assets/images/category/'), $imageName);
        //     $path = 'assets/images/category/' . $imageName;
        // }
        $path = 'images/product-categories/';
        if ($req->hasFile('imageFile')) {
            $imageName = time() . '.' . $req->imageFile->extension();
            Storage::disk('spaces')->putFileAs($path, $req->imageFile, $imageName);
            // $req->imageFile->move(public_path('assets/images/product-brand/'), $imageName);
            $path = 'images/product-categories/' . $imageName;
            $productCat->logo_img = $path;
        }

        $productCat->name = $name;
        $productCat->save();

        DB::commit();

        $data = [
            'title' => 'บันทึกสำเร็จ!',
            'msg' => 'บันทึกหมวดหมู่สินค้าสำเร็จ',
            'status' => 'success',
        ];
        return $data;
    }

    public function changeStatus(Request $req)
    {

        $id = $req->id;

        DB::beginTransaction();

        $status = 0;
        $productCat = ProductCategory::find($id);
        if ($productCat == null) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'แก้ไขไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];

            return $data;
        }
        $oldStatus = $productCat->is_active;

        if ($oldStatus == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $productCat->is_active = $status;
        $productCat->save();

        DB::commit();

        $data = [
            'title' => 'สำเร็จ!',
            'msg' => 'แก้ไขสำเร็จ',
            'status' => 'success',
        ];

        return $data;
    }
}
