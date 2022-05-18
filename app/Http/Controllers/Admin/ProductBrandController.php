<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductBrand;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductBrandController extends Controller
{
    public function index()
    {
        return view('admin.product-brands.index');
    }

    public function show()
    {
        return datatables()->of(
            ProductBrand::query()->orderBy('id', 'asc')
        )->toJson();
    }

    public function store(Request $req)
    {

        // return $req->all();
        $validated = $req->validate([
            'name' => 'string|max:50',
        ]);

        $id = $req->id;
        $name = $req->name;


        $productBrand = ProductBrand::find($id);

        if ($productBrand == null) {
            if (ProductBrand::where('name', $name)->first()) {
                $data = [
                    'title' => 'ผิดพลาด!',
                    'msg' => 'ชื่อนี้ถูกใช้แล้ว',
                    'status' => 'warning',
                ];
                return $data;
            }
            $productBrand = new ProductBrand;
            $productBrand->is_active = 1;
        }

        DB::beginTransaction();

        $path = 'hbImages/product-brands/';
        if ($req->hasFile('imageFile')) {
            $imageName = time() . '.' . $req->imageFile->extension();
            Storage::disk('spaces')->putFileAs($path, $req->imageFile , $imageName);
            // $req->imageFile->move(public_path('assets/hbImages/product-brand/'), $imageName);
            $path = 'hbImages/product-brands/' . $imageName;
            $productBrand->logo_img = $path;
        }
        $productBrand->name = $name;
        $productBrand->save();

        DB::commit();

        $data = [
            'title' => 'บันทึกสำเร็จ!',
            'msg' => 'บันทึกแบรนด์สินค้าสำเร็จ',
            'status' => 'success',
        ];
        return $data;
    }

    public function changeStatus(Request $req)
    {

        $id = $req->id;

        DB::beginTransaction();

        $status = 0;
        $productBrand = ProductBrand::find($id);
        if ($productBrand == null) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'แก้ไขไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];

            return $data;
        }
        $oldStatus = $productBrand->is_active;

        if ($oldStatus == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $productBrand->is_active = $status;
        $productBrand->save();

        DB::commit();

        $data = [
            'title' => 'สำเร็จ!',
            'msg' => 'แก้ไขสำเร็จ',
            'status' => 'success',
        ];

        return $data;
    }
}
