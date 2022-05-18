<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Shop;
use App\Models\RepairRegistration;
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
        $products = Product::orderBy('id', 'desc')->get();
        $shops = Shop::where('id', 5)->get();
        $countRepair = RepairRegistration::count('id');

        return view('agent.repair.index', compact('customers', 'products', 'shops', 'countRepair'));
    }

    public function show()
    {
        $userId = Auth::user()->id;
        $agent = Agent::where('user_id', $userId)->first();
        $agentId = $agent->id;
        if(!$agentId){
            return datatables()->of(
                RepairRegistration::query()->with('customer', 'product', 'shop', 'agent')->where('created_at', '==', null)->orderBy('id', 'asc')
            )->toJson();
        }
        return datatables()->of(
            RepairRegistration::query()->with('customer', 'product', 'shop', 'agent')->where('agent_id', $agentId)->orderBy('id', 'asc')
        )->toJson();
    }

    public function update(Request $req)
    {

        $userId = Auth::user()->id;
        $agent = Agent::where('user_id', $userId)->first();
        $agentId = $agent->id;

        $repair_id = $req->repair_id;
        $serials = $req->serials;
        $customer_id = $req->customer;
        $product_id = $req->product;
        $detail = $req->detail;

        $shop_id = 5;
        $startDate = $req->startDate;
        $endDate = $req->endDate;
        
        $repair = RepairRegistration::find($repair_id);
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
        $repair->product_id = $product_id;
        $repair->serial_no = $serials[0];
        $repair->shop_id = $shop_id;
        $repair->detail = $detail;
        $repair->repair_start_date = Carbon::parse($startDate);
        $repair->repair_end_date = Carbon::parse($endDate);
        $repair->repair_months = $months;
        $repair->user_create_id = Auth::user()->id;
        $repair->agent_id = $agentId;
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

        $userId = Auth::user()->id;
        $agent = Agent::where('user_id', $userId)->first();
        $agentId = $agent->id;

        $serials = $req->serials;
        $customer_id = $req->customer;
        $product_id = $req->product;
        $detail = $req->detail;
        $shop_id = 5;
        $startDate = $req->startDate;
        $endDate = $req->endDate;

        $checkcode = RepairRegistration::whereIn('serial_no', $serials)->get();

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

            $repair = RepairRegistration::where('serial_no', $serial)->where('product_id', $product_id)->first();

            if ($repair) {
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

            $repair = new RepairRegistration;
            $repair->customer_id = $customer_id;
            $repair->product_id = $product_id;
            $repair->serial_no = $serial;
            $repair->shop_id = $shop_id;
            $repair->detail = $detail;
            $repair->repair_start_date = Carbon::parse($startDate);
            $repair->repair_end_date = Carbon::parse($endDate);
            $repair->repair_months = $months;
            $repair->user_create_id = Auth::user()->id;
            $repair->agent_id = $agentId;
            $repair->save();

        }
      
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

        $userId = Auth::user()->id;
        $agent = Agent::where('user_id', $userId)->first();
        $agentId = $agent->id;
        
        return datatables()->of(
            RepairRegistration::query()->with('customer', 'product', 'shop', 'agent')->where('customer_id', $id)->orderBy('id', 'asc')
        )->toJson();
    }


}
