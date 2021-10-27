<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Carbon\Carbon;
use App\Models\CashWallet;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\Transaction;
use App\Models\AdditionalFunction;
use App\Models\CompanyTransaction;
use App\Models\User;
use App\Models\CompanyWallet;
use App\Models\CompanyDeposit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function changePassword(Request $req){

        // return $req->all();
        $current_password = $req->current_password;
        $user_id = $req->data_id;
        $password = $req->password;
        $password_confirmation = $req->password_confirmation;

        $user = User::find($user_id);
        if(!$user){
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ไม่พบผู้ใช้',
                'status' => 'error',
            ];
            return $data;
        }
        if ($password != $password_confirmation) {
            $data = [
                    'title' => 'ผิดพลาด!',
                    'msg' => 'รหัสผ่านไม่ตรงกัน',
                    'status' => 'error',
                ];
            return $data;
        }
        $user->password = Hash::make($password);
        $user->save();

        $data = [
            'title' => 'สำเร็จ!',
            'msg' => 'บันทึกรหัสผ่านสำเร็จ',
            'status' => 'success',
        ];
        return $data;
        // $phoneNumber = $req->get('phone_number');
        // // $userData = User::where('phone_number', $phoneNumber)->first();
        // $userData = User::where('id', )->first();

        // $request->validate([
        //     'password' => ['required', 'string', 'min:6', 'confirmed'],
        // ]);

        // $userData->password = Hash::make($request->get('password'));
        // $userData->update();
    }

    function pagesmaintenance()
    {
        return view('maintenance');
    }
}
