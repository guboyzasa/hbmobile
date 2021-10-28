<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CompanyContract;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\ThaiRegion;
use App\Models\Agent;
use App\Models\ShippingMethod;
use App\Models\OrderDeliveryAddress;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\PaymentMethod;
use App\Models\OrderBillAddress;
use App\Models\OrderPayment;
use App\Models\Customer;
use App\Models\Zipcode;
use App\Models\WarrantyRegistration;
use App\Models\User;
use App\Models\Province;
use App\Models\District;
use App\Models\SubDistrict;
use App\Models\CustomerAddress;
use App\Models\CustomerBillAddress;
use App\Models\BannerImage;

use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; 


class EcommerceController extends Controller
{
    public function index()
    {
        $company = CompanyContract::first();
        $product_brands = ProductBrand::where('is_active',1)->get();
        $product_categorys = ProductCategory::where('is_active',1)->get();
        $products = Product::where('is_active',1)->limit(8)->get()->shuffle();
        $banner_imgs = BannerImage::all();

        return view('e-commerce.index',compact('company','product_brands','product_categorys','products','banner_imgs'));
    }
    public function index2()
    {
        $company = CompanyContract::first();
        return view('e-commerce.index-2',compact('company'));
    }
    public function index3()
    {
        $company = CompanyContract::first();
        return view('e-commerce.index-3',compact('company'));
    }
    public function index4()
    {
        $company = CompanyContract::first();
        return view('e-commerce.index-4',compact('company'));
    }
    public function products(Request $request)
    {
        $company = CompanyContract::first();
        $products = Product::where('is_active',1)->get();
        $product_categorys = ProductCategory::where('is_active',1)->get();
        $new_product_categorys = [];
        foreach ($product_categorys as $key => $product_category){
            $product_brand_id_array = Product::where('product_category_id',$product_category->id)->where('is_active',1)->pluck('product_brand_id');
            $product_brands = ProductBrand::whereIn('id', $product_brand_id_array)->get();

            $newData = [];
            $newData['brands'] = $product_brands;
            
            $category = array_merge($product_categorys[$key]->toArray(), $newData);
            array_push($new_product_categorys, $category);
        }

        $product_categorys = $new_product_categorys;
        $product_filter_category = $request->product_filter_category;
        $product_filter_brand = $request->product_filter_brand;
        // return $product_categorys;

        return view('e-commerce.products',compact('company','products','product_categorys', 'product_filter_category', 'product_filter_brand'));
    }
    public function productsWithFilter()
    {
        $company = CompanyContract::first();
        return view('e-commerce.products-with-filter',compact('company'));
    }
    public function productsSidebarLeft()
    {
        $company = CompanyContract::first();
        return view('e-commerce.products-sidebar-left',compact('company'));
    }
    public function productsSidebarRight()
    {
        $company = CompanyContract::first();
        return view('e-commerce.products-sidebar-right',compact('company'));
    }
    public function product()
    {
        $company = CompanyContract::first();
        $product = Product::where('id',1)->first();
        return view('e-commerce.product',compact('company','product'));
    }
    public function wishlist()
    {
        $company = CompanyContract::first();
        return view('e-commerce.wishlist',compact('company'));
    }
    public function cart(Request $req)
    {
        // $value = $req->session()->get('p_id');
        // $test = session()->get('p_id');
        // dd ($test);
        // dd($value);
        $company = CompanyContract::first();
        $shippings = ShippingMethod::all();
        return view('e-commerce.cart',compact('company','shippings'));
    }

    public function checkout(Request $req)
    {
        $bigDatas = [];
        $array_product = [];
        $data = [];

        $product_ids = $req->product_id; //รหัสสินค้า
        $shipping_method = $req->shipping_method; //id ประเภทขนส่ง
        $subTotal = $req->subTotal; //ราคารวมก่อนรวมค่าส่ง
        $shipping = $req->shipping; //ค่าส่ง
        $summary = $req->summary; //ราคารวมค่า
        $qty = $req->qty; //จำนวนสินค้า
        $subPrice = $req->subPrice; //ราคาสินค้า

        if($shipping_method){
            $shipping = ShippingMethod::find($shipping_method);
        }

        if($product_ids){
            foreach($product_ids as $key => $product_id){
                $product = Product::find($product_id);
                $array_product = [
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'qty' => $qty[$key],
                    'price' => $product->price,
                ];
                array_push($data,$array_product);
            }
        }

        $bigDatas = [
            'subTotal' => $subTotal,
            'shipping' => $shipping,
            'summary' => $summary,
            'products' => $data,
        ];
 
        $company = CompanyContract::first();
        $provinces = Province::all();
        $paymentMethod = PaymentMethod::where('is_active', 1)->get();

        $user_id = Auth::user()->id;
        $customer = Customer::with('customerAddress', 'customerBillAddress')->where('user_id', $user_id)->first();

        return view('e-commerce.checkout',compact('company','bigDatas','provinces', 'paymentMethod', 'customer'));
        // return redirect()->route('order-received',compact('company','bigDatas','provinces', 'paymentMethod', 'customer'));
    }
    public function orderReceived(Request $req)
    {
        DB::beginTransaction();
        $delivery_first_name = $req->delivery_first_name;
        $delivery_last_name = $req->delivery_last_name;
        $delivery_email = $req->delivery_email;
        $delivery_customer_tel = $req->delivery_customer_tel;
        $delivery_province = $req->delivery_province;
        $delivery_address = $req->delivery_address;
        $delivery_zipcode = $req->delivery_zipcode;
        $delivery_sub_district = $req->delivery_sub_district;
        $delivery_district = $req->delivery_district;
        // $delivery_personal_code = $req->personal_code;
        $note = $req->note;
        $total = $req->total;
        $shipping_id = $req->shipping_id;
        $shipping_price = $req->shipping_price;
        $total_amount = $req->total_amount;
        $payment_method = $req->payment_method;

        $product_ids = $req->product_id;
        $qtys = $req->qty;
        $product_prices = $req->product_price;

        $checkBill = $req->ship_different_address;

        $user_id = Auth::user()->id;
        $customer = Customer::where('user_id', $user_id)->first();
        if($customer){
            $customer_id = $customer->id;
        }else{
            $customer_id = null;
        }

        if($product_ids){
            $order = new Order;
            $order->code = $this->getCode();
            $order->status = 0;
            $order->total = $total;
            $order->shipping_method_id = $shipping_id;
            $order->shipping_price = $shipping_price;
            $order->total_amount = $total_amount;
            $order->payment_method_id = $payment_method;
            $order->user_id = $user_id;
            $order->customer_id = $customer_id;
            $order->save();

            //รายละเอียดที่อยู่จัดส่งลงฐานข้อมูล

            $province = Province::where('code', $delivery_province)->first();
            $provinceName = @$province->name_th;
            $district = District::where('code', $delivery_district)->first();
            $districtName = @$district->name_th;
            $subDistrict = SubDistrict::where('code', $delivery_sub_district)->first();
            $subDistrictName = @$subDistrict->name_th;

            $orderDelivery = new OrderDeliveryAddress;
            $orderDelivery->order_id = $order->id;
            $orderDelivery->name = $delivery_first_name.' '.$delivery_last_name;
            $orderDelivery->phone = $delivery_customer_tel;
            $orderDelivery->email = $delivery_email;
            $orderDelivery->address = $delivery_address;
            $orderDelivery->sub_district = @$subDistrictName;
            $orderDelivery->district = @$districtName;
            $orderDelivery->province = @$provinceName;
            $orderDelivery->zipcode = $delivery_zipcode;
            $orderDelivery->note = $note;
            // $orderDelivery->personal_code = $delivery_personal_code;
            $orderDelivery->save();

            //ราย
            if($checkBill){

                $province = Province::where('code', $req->bill_province)->first();
                $billProvinceName = @$province->name_th;
                $district = District::where('code', $req->bill_district)->first();
                $billDistrictName = @$district->name_th;
                $subDistrict = SubDistrict::where('code', $req->bill_sub_district)->first();
                $billSubDistrictName = @$subDistrict->name_th;

                $orderBill = new OrderBillAddress;
                $orderBill->order_id = $order->id;
                $orderBill->name = $req->bill_first_name.' '.$req->bill_last_name;
                $orderBill->address = $req->bill_address;
                $orderBill->province = @$billProvinceName;
                $orderBill->district = @$billDistrictName;
                $orderBill->sub_district = @$billSubDistrictName;
                $orderBill->zipcode = $req->bill_zipcode;
                $orderBill->personal_code = $req->bill_personal_code;
                $orderBill->phone = $req->bill_customer_tel;
                $orderBill->email = $req->bill_customer_email;
                $orderBill->save();
            }else{
                $orderBill = new OrderBillAddress;
                $orderBill->order_id = $order->id;
                $orderBill->name = $delivery_first_name . ' ' . $delivery_last_name;
                $orderBill->address = $delivery_address;
                $orderBill->province = @$provinceName;
                $orderBill->district = @$districtName;
                $orderBill->sub_district = @$subDistrictName;
                $orderBill->zipcode = $delivery_zipcode;
                // $orderBill->personal_code = $delivery_personal_code;
                $orderBill->phone = $delivery_customer_tel;
                $orderBill->email = $delivery_email;
                $orderBill->save();
            }

            foreach($product_ids as $key => $product_id){
                //รายละเอียดสินค้าลงฐานข้อมูล
                $orderDetail = new OrderDetail;
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $product_id;
                $orderDetail->amount = $qtys[$key];
                $orderDetail->price_unit = $product_prices[$key];
                $orderDetail->total_amount = $qtys[$key] * $product_prices[$key];
                $orderDetail->save();
            }
            $alert = 'success';
            $msg = 'สั่งสินค้าเรียบร้อย';
        }else{
            $alert = 'danger';
            $msg = 'Error';
        }

        $order = Order::with('orderDetails.product','shippingMethod')->find($order->id);
        $company = CompanyContract::first();
        DB::commit();
        // return view('e-commerce.order-received',compact('company','alert','msg','order'));
        return redirect()->route('profile-account')->with('success', 'สั่งซื้อสินค้าสำเร็จ !');
    }
    public function orderTracking()
    {
        $company = CompanyContract::first();
        return view('e-commerce.order-tracking',compact('company'));
    }
    public function page()
    {
        $company = CompanyContract::first();
        return view('e-commerce.page',compact('company'));
    }
    public function loginRegister()
    {
        $company = CompanyContract::first();
        return view('e-commerce.login-register',compact('company'));
    }
    public function register()
    {
        $company = CompanyContract::first();
        return view('e-commerce.register',compact('company'));
    }
    public function Error404()
    {
        $company = CompanyContract::first();
        return view('e-commerce.Error-404',compact('company'));
    }
    public function faqs()
    {
        $company = CompanyContract::first();
        return view('e-commerce.faqs',compact('company'));
    }
    public function about()
    {
        $company = CompanyContract::first();
        return view('e-commerce.about',compact('company'));
    }
    public function contact()
    {
        $company = CompanyContract::first();
        return view('e-commerce.contact',compact('company'));
    }
    public function getFooterContract()
    {
        $company = CompanyContract::first();
        return $company;
    }
    public function agent()
    {
        $company = CompanyContract::first();
        $thai_regions = ThaiRegion::all();
        $agents = Agent::all();
        return view('e-commerce.agent',compact('company','thai_regions','agents'));
    }
    public function option()
    {
        $company = CompanyContract::first();
        return view('e-commerce.option',compact('company'));
    }
    public function produce()
    {
        $company = CompanyContract::first();
        return view('e-commerce.produce',compact('company'));
    }
    public function cartPost(Request $req)
    {
        $p_ids = preg_split ("/\,/", $req->cart_post); 
        $products = Product::whereIn('id',$p_ids)->where('is_active',1)->get();
        $shippings = ShippingMethod::all();
        $company = CompanyContract::first();
        return view('e-commerce.cart',compact('company','products','shippings'));
    }
    public function productDetail($id)
    {
        $product = Product::with('productImages')->find($id);
        $random_products = Product::where('is_active',1)->limit(7)->get()->shuffle();
        $company = CompanyContract::first();
        return view('e-commerce.product',compact('company','product','random_products'));
    }

    public function getCode()
    {
        $now_at = Carbon::now();

        $month = $now_at->month;

        if (strlen($month) == 1) {
            $month = '0' . $month;
        }

        $year = substr($now_at->year + 543, -2);

        $search_code =  'SODS' . $year . $month;

        $lastest_code = Order::withTrashed()->where('code', 'LIKE', $search_code . '%')->orderBy('code', 'desc')->first();


        if ($lastest_code == null) {
            $current_code = $search_code . '001';
            return $current_code;
        }

        $code = $lastest_code->code;

        $num = (int) substr($code, -3);
        $code = $num + 1;
        $count = 3 - strlen($code);

        for ($i = 0; $i < $count; $i++) {
            $code = '0' . $code;
        }

        $current_code = $search_code . $code;

        return $current_code;
    }

    public function profileAccount()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $customer = Customer::with('customerAddress','customerBillAddress')->where('user_id', $user_id)->first();

        $orders = Order::with('orderDetails.product','paymentMethod','orderDeliveryAddress','orderBillAddress')->where('user_id',$user_id)->OrderBy('id','desc')->get();
        $order = Order::with('orderDetails.product','shippingMethod','paymentMethod','orderDeliveryAddress','orderBillAddress')->where('user_id',$user_id)->OrderBy('id','desc')->first();

        $company = CompanyContract::first();
        $warrantys = WarrantyRegistration::with('customer', 'product','agent')->where('customer_id', $customer->id)->orderBy('id', 'asc')->get();
        $provinces = Province::all();
  
        return view('e-commerce.profile-account',compact('company','order','orders','customer','warrantys','provinces','user'));
    }

    public function formUploadSlip($id)
    {
        $order = Order::with('orderDetails.product','shippingMethod')->find($id);
        $company = CompanyContract::first();
        return view('e-commerce.upload',compact('company','order'));
    }

    public function uploadSlip(Request $req)
    {
        DB::beginTransaction();
        $order_id = $req->order_id;
        $payment_method_id = $req->payment_method_id;
        // $hour = $req->hour;
        // $min = $req->min;
        $time = $req->time;
        $payment_amount = $req->payment_amount;
        $note = $req->note;
        $date = $req->date;
        $payment_at = $date.' '.$time;
        $imgbase64 = $req->imgbase64;
        $path = 'images/slip/'.$order_id.'/';

        if($order_id){
            
            $order_payment = OrderPayment::where('order_id',$order_id)->first();
            if(!$order_payment){
                $order_payment = new OrderPayment;
            }
            if($order_payment->payment_slip != null){
                Storage::disk('spaces')->delete($order_payment->payment_slip);
            }
            $order_payment->order_id = $order_id;
            $order_payment->payment_method_id = $payment_method_id;
            $order_payment->payment_amount = $payment_amount;
            $order_payment->payment_detail = $note;
            $order_payment->payment_at = $payment_at;
            
            if($imgbase64 != null && preg_match('/^data:image\/(\w+);base64,/', $imgbase64)){
                $data = substr($imgbase64, strpos($imgbase64, ',') + 1);
                $base64_decode = base64_decode($data);
                $extension = explode('/', explode(':', substr($imgbase64, 0, strpos($imgbase64, ';')))[1])[1];
                $filename = strtotime(Carbon::now()) . rand(1, 100) . '.' . $extension;
                Storage::disk('spaces')->put($path . $filename, $base64_decode);
                $fullPath = $path.$filename;
                $order_payment->payment_slip = $fullPath;
            }

            $order_payment->save();
            $order = Order::find($order_id);
            $order->status = 1;
            $order->save();
            $data = [
                'title' => 'บันทึกสำเร็จ!',
                'msg' => 'บันทึกตัวแทนจำหน่ายสำเร็จ',
                'status' => 'success',
            ];
        }else{
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ลบไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];
        }
        DB::commit();
        // return $data;
        return redirect()->route('profile-account');
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
        $subDistrictCode = $req->subDistrictCode;
        $zipcode = Zipcode::where('sub_district_code', $subDistrictCode)->first();
        
        return $zipcode;
    }

    public function profileAccountStore(Request $req)
    {

        DB::beginTransaction();
        $user_id = Auth::user()->id;

        $username = $req->username;
        $name = $req->name;
        $phone = $req->phone;
        $email = $req->email;
        $address = $req->address;
        $province_code = $req->province_code;
        $province = Province::where('code',$province_code)->first();
        $district_code = $req->district_code;
        $district = District::where('code',$district_code)->first();
        $sub_district_code = $req->sub_district_code;
        $sub_district = SubDistrict::where('code',$sub_district_code)->first();
        $zipcode = $req->zipcode;
        $personal_code = $req->personal_code;

        $customer = Customer::where('user_id', $user_id)->first();
        if($customer){
            $customer->name = $name;
            $customer->phone = $phone;
            $customer->email = $email;
            $customer->personal_code = $personal_code;
            $customer->save();
        }

        $customer_address = CustomerAddress::where('customer_id',$customer->id)->first();
        if($customer_address){
            $customer_address->name = $name;
            $customer_address->phone = $phone;
            $customer_address->email = $email;
            $customer_address->address = $address;
            $customer_address->province_code = $province_code;
            $customer_address->province = $province->name_th;
            $customer_address->district_code = $district_code;
            $customer_address->district = $district->name_th;
            $customer_address->sub_district_code = $sub_district_code;
            $customer_address->sub_district = $sub_district->name_th;
            $customer_address->zipcode = $zipcode;
            $customer_address->save();
            
            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'บันทึกข้อมูลเรียบร้อย',
                'status' => 'success',
            ];
        }

        DB::commit();
        return $data;
    }

    public function profileAccountBillStore(Request $req)
    {
        DB::beginTransaction();
        $user_id = Auth::user()->id;

        $bill_address = $req->bill_address;
        $bill_province = $req->bill_province;
        $province = Province::where('code',$bill_province)->first();
        $bill_district = $req->bill_district;
        $district = District::where('code',$bill_district)->first();
        $bill_sub_district = $req->bill_sub_district;
        $sub_district = SubDistrict::where('code',$bill_sub_district)->first();
        $zipcode = $req->bill_zipcode;

        $customer = Customer::where('user_id', $user_id)->first();
        $customer_bill_address = CustomerBillAddress::where('customer_id',$customer->id)->first();
        if($customer_bill_address){
            $customer_bill_address->address = $bill_address;
            $customer_bill_address->sub_district = $sub_district->name_th;
            $customer_bill_address->sub_district_code = $bill_sub_district;
            $customer_bill_address->district = $district->name_th;
            $customer_bill_address->district_code = $bill_district;
            $customer_bill_address->province = $province->name_th;
            $customer_bill_address->province_code = $bill_province;
            $customer_bill_address->zipcode = $zipcode;
            $customer_bill_address->save();
            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'บันทึกข้อมูลเรียบร้อย',
                'status' => 'success',
            ];
        }
        DB::commit();
        return $data;
    }

    public function manual()
    {
        $company = CompanyContract::first();
        return view('e-commerce.manual',compact('company'));
    }

    public function changePasswordPage()
    {
        $company = CompanyContract::first();
        return view('e-commerce.change-password',compact('company'));
    }
    public function verifyUsername()
    {
        $company = CompanyContract::first();
        return view('e-commerce.verify-username',compact('company'));
    }
}