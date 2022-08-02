<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\OnsiteRegistration;
use App\Models\Order;
use App\Models\WarrantyRegistration;
use App\Models\RepairRegistration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $start = date("Y-m-1 00:00");
        $end = date("Y-m-d H:i");

        $countOrder = Order::where('status', '!=', 6)->count();
        $sumOrder = Order::where('created_at','>=',$start)->where('created_at', '<=' , $end)->whereIn('status', [2,3,4,5])->sum('total_amount');
        $sumOrderAll = Order::whereIn('status', [0,1,2,3,4,5,6])->count();
        $sumRepairPrice = RepairRegistration::where('created_at','>=',$start)->where('created_at', '<=' , $end)->whereIn('status', [1,2,3])->sum('price');
        $sumRepairShipping = RepairRegistration::where('created_at','>=',$start)->where('created_at', '<=' , $end)->whereIn('status', [1,2,3])->sum('shipping_price');
        $countRegisterWarranty = WarrantyRegistration::count();
        $countRegisterRepair = RepairRegistration::count();
        $countCustomer = Customer::count();
        $countUserCustomer = Customer::where('user_id', '!=', null)->count();
        $countUserCus = Customer::where('user_id', '=', null)->count();
        $countAgent = Agent::count();
        $repairs = RepairRegistration::orderBy('id', 'desc')->get();
        $onsite = OnsiteRegistration::orderBy('id', 'desc')->get();
        $countOnsite = OnsiteRegistration::count();
        $sumOnsites = OnsiteRegistration::where('created_at','>=',$start)->where('created_at', '<=' , $end)->where('id','!=',null)->sum('price');

        return view('admin.dashboard-saas', compact('sumOrderAll','sumOnsites','countOnsite','countUserCus','onsite','sumRepairPrice','sumRepairShipping','countOrder', 'sumOrder', 'countRegisterWarranty','countRegisterRepair', 'countCustomer', 'countUserCustomer', 'countAgent','repairs'));
    }

}
