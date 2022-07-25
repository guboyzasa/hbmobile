<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\RepairRegistration;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $countOrder = Order::where('status', '!=', 6)->count();
        $sumOrder = Order::whereIn('status', [2,3,4,5])->sum('total_amount');
        $sumRepairPrice = RepairRegistration::whereIn('status', [1,2,3])->sum('price');
        $sumRepairShipping = RepairRegistration::whereIn('status', [1,2,3])->sum('shipping_price');

        return view('admin.index' , compact('countOrder','sumOrder','sumRepairPrice','sumRepairShipping'));
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
