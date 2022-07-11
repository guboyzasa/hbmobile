<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Shop;
use App\Models\WarrantyRegistration;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WarrantyController extends Controller
{
    public function index()
    {

        $customers = Customer::orderBy('id', 'desc')->get();
        $products = Product::orderBy('id', 'desc')->get();
        $shops = Shop::all();
        $countWarranty = WarrantyRegistration::count('id');

        return view('admin.warranties.index', compact('customers', 'products', 'shops', 'countWarranty'));
    }

    public function show()
    {
        return datatables()->of(
            WarrantyRegistration::query()->with('customer', 'product', 'shop', 'agent')->orderBy('id', 'asc')
        )->toJson();
    }

    public function update(Request $req)
    {

        // return $req->all();
        // $validated = $req->validate([
        //     'serials' => 'string|max:50',
        // ]);

        $warranty_id = $req->warranty_id;
        $serials = $req->serials;
        $customer_id = $req->customer;
        $product_id = $req->product;
        $detail = $req->detail;

        $shop_id = $req->shop;
        $startDate = $req->startDate;
        $endDate = $req->endDate;

        // return $req->all();
        
        $warranty = WarrantyRegistration::find($warranty_id);
        $customer = Customer::find($customer_id);
        if(!$customer){
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ไม่พบลูกค้า',
                'status' => 'error',
            ];
            return $data;
        }

        if (!Product::find($product_id)) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ไม่พบสินค้า',
                'status' => 'error',
            ];
            return $data;
        }

        if (!$warranty) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ไม่พบรายการนี้',
                'status' => 'error',
            ];
            return $data;
        }


        $date1 = Carbon::parse($startDate);
        $date2 = Carbon::parse($endDate);
        $months = $date1->diffInMonths($date2);

        DB::beginTransaction();

        $warranty->customer_id = $customer_id;
        // $warranty->user_id = $customer->user_id ? $customer->user_id : null;
        $warranty->product_id = $product_id;
        $warranty->serial_no = $serials[0];
        $warranty->shop_id = $shop_id;
        $warranty->detail = $detail;
        $warranty->warranty_start_date = Carbon::parse($startDate);
        $warranty->warranty_end_date = Carbon::parse($endDate);
        $warranty->warranty_months = $months;
        $warranty->user_create_id = Auth::user()->id;
        $warranty->save();

        DB::commit();

        $data = [
            'title' => 'ลงทะเบียนสำเร็จ!',
            'msg' => 'ลงทะเบียนรับประกันสินค้าสำเร็จ',
            'status' => 'success',
        ];
        return $data;
    }

    public function store(Request $req)
    {

        // return $req->all();
        // $validated = $req->validate([
        //     'serial' => 'string|max:50',
        // ]);

        $serials = $req->serials;
        $customer_id = $req->customer;
        $product_id = $req->product;
        $detail = $req->detail;
        $shop_id = $req->shop;
        $startDate = $req->startDate;
        $endDate = $req->endDate;

       
        // return $req->all();

        $checkcode = WarrantyRegistration::whereIn('serial_no', $serials)->get();

        $customer = Customer::find($customer_id);
        if (!$customer) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ไม่พบลูกค้า',
                'status' => 'error',
            ];
            return $data;
        }

        if (!Product::find($product_id)) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ไม่พบสินค้า',
                'status' => 'error',
            ];
            return $data;
        }

        foreach ($serials as $serial) {

            $warranty = WarrantyRegistration::where('serial_no', $serial)->where('product_id', $product_id)->first();

            if ($warranty) {
                $data = [
                    'title' => 'ผิดพลาด!',
                    'msg' => 'Serial no : '. $serial .' นี้ของสินค้ารหัสนี้ถูกใช้แล้ว' ,
                    'status' => 'error',
                ];
                return $data;
            }
        }


        $date1 = Carbon::parse($startDate);
        $date2 = Carbon::parse($endDate);
        $months = $date1->diffInMonths($date2);

        DB::beginTransaction();

        foreach ($serials as $serial) {

         
            $warranty = new WarrantyRegistration;
            $warranty->customer_id = $customer_id;
            // $warranty->user_id = $customer->user_id ? $customer->user_id : null;
            $warranty->product_id = $product_id;
            $warranty->serial_no = $serial;
            $warranty->shop_id = $shop_id;
            $warranty->detail = $detail;
            $warranty->warranty_start_date = Carbon::parse($startDate);
            $warranty->warranty_end_date = Carbon::parse($endDate);
            $warranty->warranty_months = $months;
            $warranty->user_create_id = Auth::user()->id;
            $warranty->save();

        }

       //ลงทะเบียนประกัน LINE Notify
       $customer = Customer::find($customer_id);
       $productName = Product::find($product_id);
       $message1 = "message=" . "\n** บันทึกลงทะเบียนประกัน **" .
       "\nSerial No: $warranty->serial_no" .
       "\nชื่อลูกค้า: $customer->name" .
       "\nชื่อสินค้า: $productName->name" .
       "\nวันเริ่มประกัน: $req->startDate" .
       "\nวันสินสุดประกัน: $req->endDate" ;
    //    "\nซื้อจาก: $shopName->name" ;

       $this->sendLineNotify1(env('LINE_TOKEN1'), $message1);

        DB::commit();

        $data = [
            'title' => 'ลงทะเบียนสำเร็จ!',
            'msg' => 'ลงทะเบียนรับประกันสินค้าสำเร็จ',
            'status' => 'success',
        ];
        return $data;
    }

    public function destroy(Request $req)
    {
        $id = $req->id;

        $warranty = WarrantyRegistration::find($id);
        if ($warranty == null) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ลบไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];

            return $data;
        } else {

            WarrantyRegistration::find($id)->delete();

            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'ลบรายการรับประกันสินค้าสำเร็จ',
                'status' => 'success',
            ];

            return $data;
        }
   
    }

    public function warrantyCustomer($id)
    {
        return datatables()->of(
            WarrantyRegistration::query()->with('customer', 'product', 'shop', 'agent')->where('customer_id', $id)->orderBy('id', 'asc')
        )->toJson();
    }


}
