<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\CustomerBillAddress;
use App\Models\District;
use App\Models\Province;
use App\Models\SubDistrict;
use App\Models\WarrantyRegistration;
use App\Models\RepairRegistration;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Zipcode;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {

        return view('admin.customers.index');
    }

    public function show()
    {
        return datatables()->of(
            Customer::query()->with('agent')->orderBy('id', 'asc')
        )->toJson();
    }

    public function showProfile($id)
    {
        $customer = Customer::find($id);
        $customerAddress = CustomerAddress::where('customer_id' ,$id)->first();
        $customerBillAddress = CustomerBillAddress::where('customer_id', $id)->first();
        $provinces = Province::all();
      
        $province = Province::where('code', $customerAddress->province_code)->first();
        $district = District::where('code', $customerAddress->district_code)->first();
        $addressDistricts = District::where('province_id', $province ? $province->id : null)->get();
        $addressSubDistricts = SubDistrict::where('province_id', $province ? $province->id : null)->where('district_id', $district ? $district->id : null)->get();

        $province = Province::where('code', $customerBillAddress->province_code)->first();
        $district = District::where('code', $customerBillAddress->district_code)->first();
        $billDistricts = District::where('province_id', $province ? $province->id : null)->get();
        $billSubDistricts = SubDistrict::where('province_id', $province ? $province->id : null)->where('district_id', $district ? $district->id : null)->get();

        $products = Product::orderBy('id', 'desc')->get();
        $shops = Shop::all();
        $countWarranty = WarrantyRegistration::where('customer_id', 'id')->count('id');
        $countRepair = RepairRegistration::where('customer_id', 'id')->count('id');

        if($customer == null){
            return abort(404);
        }

        // return $provinceId;
        return view('admin.customers.profile', compact('customer', 'provinces', 'customerAddress', 'customerBillAddress', 'addressDistricts', 'addressSubDistricts', 'billDistricts', 'billSubDistricts', 'countWarranty','countRepair', 'products', 'shops'));
    }

    public function getDistrict(Request $req)
    {
        $provinceCode = $req->provinceCode;
        $province = Province::where('code', $provinceCode)->first();
        $provinceId = $province->id;
        $districts = District::where('province_id', $provinceId)->get();

        return $districts;
    }

    public function getSubDistrict(Request $req)
    {
        $districtCode = $req->districtCode;
        $district = District::where('code', $districtCode)->first();
        $districtId = $district->id;
        $subDistricts = SubDistrict::where('district_id', $districtId)->get();

        return $subDistricts;
    }

    public function getZipcode(Request $req)
    {
        // return $req->all();
        $subDistrictCode = $req->subDistrictCode;
        $zipcode = Zipcode::where('sub_district_code', $subDistrictCode)->first();
        
        return $zipcode;
    }

    public function checkPhone(Request $req)
    {

        $cus = Customer::where('phone', $req->text)->first();
        if($cus != null){
            $data = [
                'title' => 'แจ้งเตือน!',
                'msg' => 'เบอร์โทรนี้ถูกใช้แล้ว',
                'status' => 'warning',
            ];

            return $data;
        }
    }

    public function store(Request $req)
    {

        // return $req->all();
        $validated = $req->validate([
            'name' => 'string|max:50',
            'phone' => 'string|max:50',
        ]);

        $id = $req->id;
        $name = $req->name;
        $phone = $req->phone;
        $email = $req->email;
        if(strlen($phone) < 9){
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'กรอกเบอร์โทรไม่ถูกต้อง',
                'status' => 'warning',
            ];
            return $data;
        }

        $customer = Customer::find($id);

        if ($customer == null) {
            if (Customer::where('phone', $phone)->first()) {
                $data = [
                    'title' => 'ผิดพลาด!',
                    'msg' => 'เบอร์นี้ถูกใช้แล้ว',
                    'status' => 'warning',
                ];
                return $data;
            }
            $customer = new Customer;
          
        }

        DB::beginTransaction();


        $customer->name = $name;
        $customer->phone = $phone;
        $customer->email = $email;
        $customer->save();

        if($id == null){
            $customerAddress = new CustomerAddress;
            $customerAddress->customer_id = $customer->id;
            $customerAddress->save();

            $customerBillAddress = new CustomerBillAddress;
            $customerBillAddress->customer_id = $customer->id;
            $customerBillAddress->save();
        }

        DB::commit();

        $data = [
            'title' => 'บันทึกสำเร็จ!',
            'msg' => 'บันทึกลูกค้าใหม่สำเร็จ',
            'status' => 'success',
        ];
        return $data;
    }

    public function changeStatus(Request $req)
    {

        $id = $req->id;

        DB::beginTransaction();

        $status = 0;
        $customer = Customer::find($id);
        $oldStatus = $customer->is_active;

        if ($oldStatus == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $customer->is_active = $status;
        $customer->save();

        DB::commit();

        $data = [
            'title' => 'สำเร็จ!',
            'msg' => 'แก้ไขสำสำเร็จ',
            'status' => 'success',
        ];

        return $data;
    }

    public function destroy(Request $req)
    {

        $id = $req->id;
        $cus = Customer::find($id);
        if ($cus) {

            Customer::find($id)->delete();
            CustomerAddress::find($id)->delete();
            CustomerBillAddress::find($id)->delete();


            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'ลบลูกค้าสำเร็จ',
                'status' => 'success',
            ];

            return $data;
        } else {

            $data = [
                'title' => 'ไม่สำเร็จ!',
                'msg' => 'ลบลูกค้าไม่สำเร็จ',
                'status' => 'error',
            ];

            return $data;
        }
    }

    public function update(Request $req)
    {

        // return $req->all();

        $id = $req->id;
        $name = $req->name;
        $email = $req->email;
        $facebook = $req->facebook;
  
        $customer = Customer::find($id);

        if ($customer == null) {
            return redirect()->back()->withErrors( 'อัพเดทข้อมูลลูกค้าไม่สำเร็จ!');
        }

        DB::beginTransaction();


        $customer->name = $name;
        $customer->email = $email;
        $customer->facebook = $facebook;
        $customer->save();

        if(CustomerAddress::where('customer_id', $id)->first() == null) {
            $customerAddress = new CustomerAddress;
            $customerAddress->customer_id = $customer->id;
            $customerAddress->save();
        }

        if (CustomerBillAddress::where('customer_id', $id)->first() == null) {
            $customerBillAddress = new CustomerBillAddress;
            $customerBillAddress->customer_id = $customer->id;
            $customerBillAddress->save();
        }


       


        DB::commit();

        return redirect()->back()->with('success', 'อัพเดทข้อมูลลูกค้าสำเร็จ!');
    }

    public function updateAddress(Request $req)
    {

        $customer_id = $req->customer_id;
        $name = $req->address_name;
        $phone = $req->address_phone;
        $address = $req->address_address;
        $province = $req->address_province;
        $district = $req->address_district;
        $subDistrict = $req->address_sub_district;
        $zipcode = $req->address_zipcode;
        $setBillAddress = $req->set_bill_address;

        $customer = Customer::find($customer_id);

        if ($customer == null) {
            return redirect()->back()->withErrors('อัพเดทที่อยู่ลูกค้าไม่สำเร็จ!');
        }
    
        DB::beginTransaction();

        $province = Province::where('code', $province)->first();
        $provinceName = $province->name_th;
        $provinceCode = $province->code;
        $district = District::where('code', $district)->first();
        $districtName = $district->name_th;
        $districtCode = $district->code;
        $subDistrict = SubDistrict::where('code', $subDistrict)->first();
        $subDistrictName = $subDistrict->name_th;
        $subDistrictCode = $subDistrict->code;

       
        $customerAddress = CustomerAddress::where('customer_id', $customer_id)->first();

        if ($customerAddress == null) {
            $customerAddress = new CustomerAddress;
        }
        $customerAddress->name = $name;
        $customerAddress->phone = $phone;
        $customerAddress->address = $address;
        $customerAddress->province = $provinceName;
        $customerAddress->district = $districtName;
        $customerAddress->sub_district = $subDistrictName;
        $customerAddress->province_code = $provinceCode;
        $customerAddress->district_code = $districtCode;
        $customerAddress->sub_district_code = $subDistrictCode;
        $customerAddress->zipcode = $zipcode;
        $customerAddress->save();

        if($setBillAddress == 'on'){
            $this->updateBillAddressWithAddress($req);
        }

        DB::commit();

        return redirect()->back()->with('success', 'อัพเดทที่อยู่ลูกค้าสำเร็จ!');
    }

    public function updateBillAddressWithAddress($req)
    {

        $customer_id = $req->customer_id;
        $name = $req->address_name;
        $phone = $req->address_phone;
        $address = $req->address_address;
        $province = $req->address_province;
        $district = $req->address_district;
        $subDistrict = $req->address_sub_district;
        $zipcode = $req->address_zipcode;

        DB::beginTransaction();

        $province = Province::where('code', $province)->first();
        $provinceName = $province->name_th;
        $provinceCode = $province->code;
        $district = District::where('code', $district)->first();
        $districtName = $district->name_th;
        $districtCode = $district->code;
        $subDistrict = SubDistrict::where('code', $subDistrict)->first();
        $subDistrictName = $subDistrict->name_th;
        $subDistrictCode = $subDistrict->code;

        $customerAddress = CustomerBillAddress::where('customer_id', $customer_id)->first();
        if ($customerAddress == null) {
            $customerAddress = new CustomerBillAddress;
        }

        $customerAddress->name = $name;
        $customerAddress->phone = $phone;
        $customerAddress->address = $address;
        $customerAddress->province = $provinceName;
        $customerAddress->district = $districtName;
        $customerAddress->sub_district = $subDistrictName;
        $customerAddress->province_code = $provinceCode;
        $customerAddress->district_code = $districtCode;
        $customerAddress->sub_district_code = $subDistrictCode;
        $customerAddress->zipcode = $zipcode;
        $customerAddress->save();

        DB::commit();

        return true;
    }

    public function updateBillAddress(Request $req)
    {

        $customer_id = $req->customer_id;
        $name = $req->bill_name;
        $phone = $req->bill_phone;
        $address = $req->bill_address;
        $province = $req->bill_province;
        $district = $req->bill_district;
        $subDistrict = $req->bill_sub_district;
        $zipcode = $req->bill_zipcode;

        $customer = Customer::find($customer_id);

        if ($customer == null) {
            return redirect()->back()->withErrors('อัพเดทที่อยู่ลูกค้าไม่สำเร็จ!');
        }

        DB::beginTransaction();

        $province = Province::where('code', $province)->first();
        $provinceName = $province->name_th;
        $provinceCode = $province->code;
        $district = District::where('code', $district)->first();
        $districtName = $district->name_th;
        $districtCode = $district->code;
        $subDistrict = SubDistrict::where('code', $subDistrict)->first();
        $subDistrictName = $subDistrict->name_th;
        $subDistrictCode = $subDistrict->code;

        $customerAddress = CustomerBillAddress::where('customer_id', $customer_id)->first();

        if ($customerAddress == null) {
            $customerAddress = new CustomerBillAddress;
        }
        $customerAddress->name = $name;
        $customerAddress->phone = $phone;
        $customerAddress->address = $address;
        $customerAddress->province = $provinceName;
        $customerAddress->district = $districtName;
        $customerAddress->sub_district = $subDistrictName;
        $customerAddress->province_code = $provinceCode;
        $customerAddress->district_code = $districtCode;
        $customerAddress->sub_district_code = $subDistrictCode;
        $customerAddress->zipcode = $zipcode;
        $customerAddress->save();

  

        DB::commit();

        return redirect()->back()->with('success', 'อัพเดทที่อยู่ออกบิลลูกค้าสำเร็จ!');
    }

  
}
