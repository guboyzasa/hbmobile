<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\CustomerBillAddress;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        if ($request->password !== $request->checkPassword) {
            return redirect()->back()->with('error','ยืนยันรหัสผ่านไม่ถูกต้อง');
        }
        
        $userData = User::where('phone',$request->phone)->first();
        if (isset($userData)) {
            return redirect()->back()->with('error','หมายเลขโทรศัพท์นี้เป็นสมาชิกแล้ว');
        }

        
        $app_otp = env('APP_OTP','');
        
        if ($app_otp == 1) {

            $otp = $this->generateOTP($request->phone);
            $obj = json_decode($otp->getContent());

            if ($obj->status == 200) {

                return $this->getOtp($obj->otp_token, $request->name, $request->phone, $request->email, $request->password, $request->checkPassword);
                
            }elseif ($obj->status == 500) {
                return redirect()->back()->with('error','SMS Service error please try again.');
                
            }else{
                return redirect()->back()->with('error','ไม่พบหมายเลขโทรศัพท์มือถือนี้');
            }

        }else{
            
            DB::beginTransaction();
            

            $customers = Customer::where('phone', $request->phone)->first();

            if (isset($customers)) {
                $user = new User;
                $user->name = $customers->name;
                $user->username = $customers->phone;
                $user->phone = $customers->phone;
                $user->email = $customers->email;
                $user->password = Hash::make($request->password);
                $user->is_admin = 0;
                $user->is_super_admin = 0;
                $user->is_agent = 0;
                $user->save();

                $customers->user_id = $user->id;
                $customers->save();
            }else{

                $user = new User;
                $user->name = $request->name;
                $user->username = $request->phone;
                $user->phone = $request->phone;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->is_admin = 0;
                $user->is_super_admin = 0;
                $user->is_agent = 0;
                $user->save();

                $customer = new Customer;
                $customer->name = $request->name;
                $customer->phone = $request->phone;
                $customer->email = $request->email;
                $customer->user_id = $user->id;
                $customer->save();

                $customer_address = new CustomerAddress;
                $customer_address->customer_id = $customer->id;
                $customer_address->name = $request->name;
                $customer_address->phone = $request->phone;
                $customer_address->email = $request->email;
                $customer_address->save();

                $customer_bil_address = new CustomerBillAddress;
                $customer_bil_address->customer_id = $customer->id;
                $customer_bil_address->name = $request->name;
                $customer_bil_address->phone = $request->phone;
                $customer_bil_address->email = $request->email;
                $customer_bil_address->save();
            }

            DB::commit();
            return redirect()->route('login-register')->with('success','สมัครสมาชิกสำเร็จ');
        }
        
        

        
    }

    public function generateOTP($req){
        // return response()->json([
        //     'isSuccess' => true,
        //     'status'=>200,
        //     'message'=> 'success',
        //     'otp_token' => 'asdasdasdasdasdsssssethdftuykgfyiujl',
        // ]);
        $phoneNumber = $req;

        $client = new Client();
        $res = $client->request('POST', 'https://otp.thaibulksms.com/v1/otp/request', [
            'form_params' => [
                'key' => '1710579641611965',
                'secret' => '539ba7bba183c84528d1a3a8ead97c10',
                'msisdn' => $phoneNumber
            ]
        ]);

        $resBody = json_decode($res->getBody());
        if($res->getStatusCode() && $resBody->data->status == 'success'){
            return response()->json([
                'isSuccess' => true,
                'status'=>200,
                'message'=> 'success',
                'otp_token' => $resBody->data->token,
            ]);

        }else{
            return response()->json([
                'isSuccess' => false,
                'status'=>500,
                'errors'=> 'SMS Service error please try again.'
            ]);
        }

    }

    public function getOtp($token, $name, $phone, $email, $password, $checkPassword)
    {
        return view('e-commerce.otp', compact('token', 'name', 'phone', 'email', 'password', 'checkPassword'));
    }

    public function verifyOTP(Request $req)
    {

        $pin = $req->first.$req->second.$req->third.$req->fourth.$req->fifth;
        $client = new Client();

        try {
            $res = $client -> request('POST', 'https://otp.thaibulksms.com/v1/otp/verify', [
                'form_params' => [
                    'key' => '1710579641611965',
                    'secret' => '539ba7bba183c84528d1a3a8ead97c10',
                    'token' => $req->token,
                    'pin' => $pin,
                ],
            ]);
        } catch (\Throwable $e) {
            return redirect()->back()->with('error','ผิดพลาด');
        }

        $resBody = json_decode($res->getBody());

        if($resBody->data->status == 'success' && $resBody->data->message == 'Code is correct.'){

            DB::beginTransaction();

            $customers = Customer::where('phone', $req->phone)->first();

            if (isset($customers)) {
                $user = new User;
                $user->name = $customers->name;
                $user->username = $customers->phone;
                $user->phone = $customers->phone;
                $user->email = $customers->email;
                $user->password = Hash::make($req->password);
                $user->is_admin = 0;
                $user->is_super_admin = 0;
                $user->is_agent = 0;
                $user->save();

                $customers->user_id = $user->id;
                $customers->save();

            }else{

                $user = new User;
                $user->name = $req->name;
                $user->username = $req->phone;
                $user->phone = $req->phone;
                $user->email = $req->email;
                $user->password = Hash::make($req->password);
                $user->is_admin = 0;
                $user->is_super_admin = 0;
                $user->is_agent = 0;
                $user->save();

                $customer = new Customer;
                $customer->name = $req->name;
                $customer->phone = $req->phone;
                $customer->email = $req->email;
                $customer->user_id = $user->id;
                $customer->save();

                $customer_address = new CustomerAddress;
                $customer_address->customer_id = $customer->id;
                $customer_address->name = $req->name;
                $customer_address->phone = $req->phone;
                $customer_address->email = $req->email;
                $customer_address->save();

                $customer_bil_address = new CustomerBillAddress;
                $customer_bil_address->customer_id = $customer->id;
                $customer_bil_address->name = $req->name;
                $customer_bil_address->phone = $req->phone;
                $customer_bil_address->email = $req->email;
                $customer_bil_address->save();
            }

            

            DB::commit();
            return redirect()->route('login-register')->with('success','สมัครสมาชิกสำเร็จ');

            // return response()->json([
            //     'isSuccess' => true,
            //     'status'=>200,
            //     'message'=> 'Verify success.',
            // ]);

        }else{
            return redirect()->back()->with('error','OTP ไม่ถูกต้อง');
            // return response()->json([
            //     'isSuccess' => false,
            //     'status'=>500,
            //     'errors'=> 'Somethings worng.'
            // ]);

       }
    }

    public function verifyUsername(Request $req)
    {
        $user = User::where('username', $req->username)->first();
        if(isset($user)){
            return view('e-commerce.verify-change-password', compact('user'));
        }else{
            return redirect()->back()->with('error','ไม่พบหมายเลขโทรศัพท์มือหรือ username นี้');
        }
    }

    public function changePassword(Request $req)
    {
        if ($req->password !== $req->checkPassword) {
            return redirect()->back()->with('error','ยืนยันรหัสผ่านไม่ถูกต้อง');
        }
        // return $req->all();
        $user = User::find($req->userId);
        $app_otp = env('APP_OTP','');
        if ($app_otp == 0) {
            $otp = $this->generateOTP($user->username);
            $obj = json_decode($otp->getContent());
            if ($obj->status == 200) {

                return $this->getOtpChange($obj->otp_token, $user->id, $req->password, $req->checkPassword, $user->username);
                
            }elseif ($obj->status == 500) {
                return redirect()->back()->with('error','SMS Service error please try again.');
                
            }else{
                return redirect()->back()->with('error','ไม่พบหมายเลขโทรศัพท์มือถือนี้');
            }
        }else{
            
            DB::beginTransaction();

            $user->password = Hash::make($req->password);
            $user->save();

            DB::commit();
            return redirect()->route('login-register')->with('success','เปลี่ยนรหัสผ่านสำเร็จ');
        }
    }

    public function getOtpChange($token, $userId, $password, $checkPassword ,$phone)
    {
        return view('e-commerce.otp-change', compact('token', 'userId', 'password', 'checkPassword', 'phone'));
    }

    public function verifyOTPChange(Request $req)
    {
        $pin = $req->first.$req->second.$req->third.$req->fourth.$req->fifth;
        $client = new Client();

        try {
            $res = $client -> request('POST', 'https://otp.thaibulksms.com/v1/otp/verify', [
                'form_params' => [
                    'key' => '1710579641611965',
                    'secret' => '539ba7bba183c84528d1a3a8ead97c10',
                    'token' => $req->token,
                    'pin' => $pin,
                ],
            ]);
        } catch (\Throwable $e) {
            return redirect()->back()->with('error','ผิดพลาด');
        }

        $resBody = json_decode($res->getBody());

        if($resBody->data->status == 'success' && $resBody->data->message == 'Code is correct.'){

            DB::beginTransaction();

            $user = User::find($req->userId);
            $user->password = Hash::make($req->password);
            $user->save();

            DB::commit();
            return redirect()->route('login-register')->with('success','เปลี่ยนรหัสผ่านสำเร็จ');

            // return response()->json([
            //     'isSuccess' => true,
            //     'status'=>200,
            //     'message'=> 'Verify success.',
            // ]);

        }else{
            return redirect()->back()->with('error','OTP ไม่ถูกต้อง');
            // return response()->json([
            //     'isSuccess' => false,
            //     'status'=>500,
            //     'errors'=> 'Somethings worng.'
            // ]);

       }
    }
}
