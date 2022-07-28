<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\OnsiteRegistration;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\RepairRegistration;
use App\Models\WarrantyRegistration;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $repairs = RepairRegistration::with('customer')->orderBy('id', 'desc')->get();
        $onsite = OnsiteRegistration::with('customer')->orderBy('id', 'desc')->get();
        $countRegisterWarranty = WarrantyRegistration::count();
        $countOrder = Order::count();
        $countOnsite = OnsiteRegistration::count();
        $countRepair = RepairRegistration::count();
        $countProduct = Product::count();
        $countProductCat = ProductCategory::count();
        $countProductBrand = ProductBrand::count();

        $countUserCus = Customer::where('user_id', '=', null)->count();
        $countUserCustomer = Customer::where('user_id', '!=', null)->count();

        
        $countRepair1 = RepairRegistration::where('status', '=', 1)->count();
        $countRepair2 = RepairRegistration::where('status', '=', 2)->count();
        $countRepair3 = RepairRegistration::where('status', '=', 3)->count();

        return view('admin.report.index',compact('repairs','onsite','countRegisterWarranty','countOrder','countOnsite','countRepair','countRepair1','countRepair2','countRepair3','countProduct','countProductCat','countProductBrand','countUserCus','countUserCustomer'));
    }

}
