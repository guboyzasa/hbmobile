<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\OnsiteRegistration;
use App\Models\Order;
use App\Models\RepairRegistration;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $countOrder = Order::where('status', '!=', 6)->count();
        $sumOrder = Order::whereIn('status', [0,1])->count();
        $sumOrderAll = Order::whereIn('status', [0,1,2,3,4,5,6])->count();
        $sumRepairPrice = RepairRegistration::whereIn('status', [1,2,3])->sum('price');
        $sumRepairShipping = RepairRegistration::whereIn('status', [1,2,3])->sum('shipping_price');
        $sumOnsites = OnsiteRegistration::where('id','!=',null)->sum('price');

        $countOnsite = OnsiteRegistration::count();
        $countRepair = RepairRegistration::count();

        // $countOrder = Order::count();
        $countCustomer = Customer::count();

        $countRepair1 = RepairRegistration::where('status', '=', 1)->count();
        $countRepair2 = RepairRegistration::where('status', '=', 2)->count();
        $countRepair3 = RepairRegistration::where('status', '=', 3)->count();

        return view('admin.index' , compact('sumOrderAll','sumOnsites','countOrder','sumOrder','sumRepairPrice','sumRepairShipping','countRepair1','countRepair2','countRepair3','countOnsite','countRepair','countCustomer'));
    }

    public function show()
    {
    }

    public function store(Request $req)
    {
    }

    public function destroy(Request $req)
    {
    }

    public function changeStatus(Request $req)
    {
    }
}
