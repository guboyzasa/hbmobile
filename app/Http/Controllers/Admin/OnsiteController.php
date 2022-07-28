<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\OnsiteRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OnsiteController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->get();
        // $statusRe = DB::table('status_repair')->get();
        $countOnsite = OnsiteRegistration::count('id');

        return view('admin.onsite.index',compact('customers', 'countOnsite'));
    }
    public function show()
    {
        return datatables()->of(
            OnsiteRegistration::query()->with('customer', 'agent')->orderBy('id', 'asc')
        )->toJson();
    }
    public function update(Request $req)
    {
        $onsite_id = $req->onsite_id;
        // $serials = $req->serials;
        $customer_id = $req->customer;
        $model = $req->model;
        $detail = $req->detail;
        $price = $req->price;
        // $shipping_price = $req->shippingPrice;
        // $status = $req->status;
        $startDate = $req->startDate;
        $endDate = $req->endDate;

        // return $req->all();
        
        $onsite = OnsiteRegistration::find($onsite_id);
        $customer = Customer::find($customer_id);
        if(!$customer){
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ไม่พบลูกค้า',
                'status' => 'error',
            ];
            return $data;
        }


        if (!$onsite) {
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

        $onsite->customer_id = $customer_id;
        $onsite->model = $model;
        // $onsite->serial_no = $serials[0];
        $onsite->price = $price;
        $onsite->detail = $detail;
        // $onsite->status = $status;
        // $onsite->shipping_price = $shipping_price;
        $onsite->onsite_start_date = Carbon::parse($startDate);
        $onsite->onsite_end_date = Carbon::parse($endDate);
        $onsite->onsite_months = $months;
        $onsite->user_create_id = Auth::user()->id;
        $onsite->save();

        DB::commit();

        $data = [
            'title' => 'แก้ไขสำเร็จ!',
            'msg' => 'แก้ไขลงทะเบียนงานติดตั้งสำเร็จ',
            'status' => 'success',
        ];
        return $data;
    }

    public function store(Request $req)
    {
       

        // return $req->all();
        // $serials = $req->serials;
        $customer_id = $req->customer;
        $model = $req->model;
        $detail = $req->detail;
        $price = $req->price;
        // $status = $req->status;
        // $shipping_price = $req->shippingPrice;
        $startDate = $req->startDate;
        $endDate = $req->endDate;

        //ลงทะเบียนงานติดตั้ง LINE Notify
        // $customer = Customer::find($customer_id);
        // $message = "message=" . "\n** บันทึกงานติดตั้ง **" .
        // "\nชื่อลูกค้า: $customer->name" .
        // "\nรุ่น:model: $req->model" .
        // "\nรายระเอียด: $req->detail" .
        // "\nราคา: $req->price บาท" .
        // "\nค่าขนส่ง: $req->shippingPrice บาท" .
        // "\nวันที่รับเครื่อง: $req->startDate" .
        // "\nวันหมดประกัน: $req->endDate";

        // $this->sendLineNotify(env('LINE_TOKEN'), $message);


        // return $req->all();
        // $checkcode = RepairRegistration::whereIn('serial_no', $serials)->get();

        $customer = Customer::find($customer_id);
        if (!$customer) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ไม่พบลูกค้า',
                'status' => 'error',
            ];
            return $data;
        }


        $date1 = Carbon::parse($startDate);
        $date2 = Carbon::parse($endDate);
        $months = $date1->diffInMonths($date2);

        DB::beginTransaction();

       

            $onsite = new OnsiteRegistration();
            $onsite->customer_id = $customer_id;
            // $onsite->user_id = $customer->user_id ? $customer->user_id : null;
            $onsite->model = $model;
            // $onsite->status = $status;
            // $onsite->serial_no = $serial;
            $onsite->price = $price;
            $onsite->detail = $detail;
            // $onsite->shipping_price = $shipping_price;
            $onsite->onsite_start_date = Carbon::parse($startDate);
            $onsite->onsite_end_date = Carbon::parse($endDate);
            $onsite->onsite_months = $months;
            $onsite->user_create_id = Auth::user()->id;
            $onsite->save();

        
      
        DB::commit();

        $data = [
            'title' => 'ลงทะเบียนสำเร็จ!',
            'msg' => 'ลงทะเบียนงานติดตั้งสำเร็จ',
            'status' => 'success',
        ];
        return $data;
    }

    public function destroy(Request $req)
    {
        $id = $req->id;

        $onsite = OnsiteRegistration::find($id);
        if ($onsite == null) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ลบไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];

            return $data;
        } else {

            OnsiteRegistration::find($id)->delete();

            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'ลบรายการลงทะเบียนงานติดตั้งสำเร็จ',
                'status' => 'success',
            ];

            return $data;
        }
   
    }

    public function onsiteCustomer($id)
    {
        return datatables()->of(
            OnsiteRegistration::query()->with('customer', 'agent')->where('customer_id', $id)->orderBy('id', 'asc')
        )->toJson();
    }

}
