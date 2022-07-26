<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\Order;
use App\Models\WarrantyRegistration;
use App\Models\RepairRegistration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countOrder = Order::where('status', '!=', 6)->count();
        $sumOrder = Order::whereIn('status', [2,3,4,5])->sum('total_amount');
        $sumRepairPrice = RepairRegistration::whereIn('status', [1,2,3])->sum('price');
        $sumRepairShipping = RepairRegistration::whereIn('status', [1,2,3])->sum('shipping_price');
        $countRegisterWarranty = WarrantyRegistration::count();
        $countRegisterRepair = RepairRegistration::count();
        $countCustomer = Customer::count();
        $countUserCustomer = Customer::where('user_id', '!=', null)->count();
        $countAgent = Agent::count();
        $repairs = RepairRegistration::with('customer')->orderBy('id', 'desc')->get();

        return view('admin.dashboard-saas', compact('sumRepairPrice','sumRepairShipping','countOrder', 'sumOrder', 'countRegisterWarranty','countRegisterRepair', 'countCustomer', 'countUserCustomer', 'countAgent','repairs'));
    }

}
