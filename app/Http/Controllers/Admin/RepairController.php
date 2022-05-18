<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Shop;
use App\Models\RepairRegistration;
use App\Models\StatusRepair;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RepairController extends Controller
{
    public function index()
    {

        $customers = Customer::orderBy('id', 'desc')->get();
        // $products = Product::orderBy('id', 'desc')->get();
        $statusRe = DB::table('status_repair')->get();
        // $shops = Shop::all();
        $countRepair = RepairRegistration::count('id');

        return view('admin.repair.index', compact('customers', 'countRepair','statusRe'));
    }

    public function show()
    {
        return datatables()->of(
            RepairRegistration::query()->with('customer', 'agent')->orderBy('id', 'asc')
        )->toJson();
    }

    public function update(Request $req)
    {
        $warranty_id = $req->warranty_id;
        // $serials = $req->serials;
        $customer_id = $req->customer;
        $model = $req->model;
        $detail = $req->detail;
        $price = $req->price;
        $status = $req->status;
        $startDate = $req->startDate;
        $endDate = $req->endDate;

        // return $req->all();
        
        $repair = RepairRegistration::find($warranty_id);
        $customer = Customer::find($customer_id);
        if(!$customer){
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ไม่พบลูกค้า',
                'status' => 'error',
            ];
            return $data;
        }


        if (!$repair) {
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

        $repair->customer_id = $customer_id;
        $repair->model = $model;
        // $repair->serial_no = $serials[0];
        $repair->price = $price;
        $repair->detail = $detail;
        $repair->status = $status;
        $repair->repair_start_date = Carbon::parse($startDate);
        $repair->repair_end_date = Carbon::parse($endDate);
        $repair->repair_months = $months;
        $repair->user_create_id = Auth::user()->id;
        $repair->save();

        DB::commit();

        $data = [
            'title' => 'ลงทะเบียนสำเร็จ!',
            'msg' => 'ลงทะเบียนงานซ่อมสำเร็จ',
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
        $status = $req->status;
        $startDate = $req->startDate;
        $endDate = $req->endDate;

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

       

            $repair = new RepairRegistration;
            $repair->customer_id = $customer_id;
            // $warranty->user_id = $customer->user_id ? $customer->user_id : null;
            $repair->model = $model;
            $repair->status = $status;
            // $repair->serial_no = $serial;
            $repair->price = $price;
            $repair->detail = $detail;
            $repair->repair_start_date = Carbon::parse($startDate);
            $repair->repair_end_date = Carbon::parse($endDate);
            $repair->repair_months = $months;
            $repair->user_create_id = Auth::user()->id;
            $repair->save();

        
      
        DB::commit();

        $data = [
            'title' => 'ลงทะเบียนสำเร็จ!',
            'msg' => 'ลงทะเบียนงานซ่อมสำเร็จ',
            'status' => 'success',
        ];
        return $data;
    }

    public function destroy(Request $req)
    {
        $id = $req->id;

        $repair = RepairRegistration::find($id);
        if ($repair == null) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ลบไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];

            return $data;
        } else {

            RepairRegistration::find($id)->delete();

            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'ลบรายการลงทะเบียนงานซ่อมสำเร็จ',
                'status' => 'success',
            ];

            return $data;
        }
   
    }

    public function repairCustomer($id)
    {
        return datatables()->of(
            RepairRegistration::query()->with('customer', 'agent')->where('customer_id', $id)->orderBy('id', 'asc')
        )->toJson();
    }


}