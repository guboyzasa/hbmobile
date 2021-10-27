<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\Order;
use App\Models\WarrantyRegistration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countOrder = Order::where('status', '!=', 6)->count();
        $sumOrder = Order::whereIn('status', [2,3,4,5])->sum('total_amount');
        $countRegisterWarranty = WarrantyRegistration::count();
        $countCustomer = Customer::count();
        $countUserCustomer = Customer::where('user_id', '!=', null)->count();
        $countAgent = Agent::count();

        return view('admin.dashboard-saas', compact('countOrder', 'sumOrder', 'countRegisterWarranty', 'countCustomer', 'countUserCustomer', 'countAgent'));
    }

}
