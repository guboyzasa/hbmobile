<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\User;
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
    //Line Notify ลงทะเบียนงานซ่อม
    public function sendLineNotify($token, $message)
    {

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set("Asia/Bangkok");

        $postfields = array('message' => $message);
        $stickerPkg = 2; //stickerPackageId
        $stickerId = 34; //stickerId

        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        // curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$stickerId);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, $message);

        $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $token . '');
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);

        curl_close($chOne);
    }
    //Line Notify ลงทะเบียนประกัน
    public function sendLineNotify1($token1, $message1)
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set("Asia/Bangkok");

        $postfields = array('message1' => $message1);
        $stickerPkg = 2; //stickerPackageId
        $stickerId = 34; //stickerId

        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        // curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$stickerId);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, $message1);

        $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $token1 . '');
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);

        curl_close($chOne);
    }
    //Line Notify ระบบรายการออเดอร์
    public function sendLineNotify2($token2, $message2)
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set("Asia/Bangkok");

        $postfields = array('message2' => $message2);
        $stickerPkg = 2; //stickerPackageId
        $stickerId = 34; //stickerId

        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        // curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$stickerId);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, $message2);

        $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $token2 . '');
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);

        curl_close($chOne);
    }
    //Line Notify ระบบสมัครสมาชิก
    public function sendLineNotify3($token3, $message3)
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set("Asia/Bangkok");

        $postfields = array('message3' => $message3);
        $stickerPkg = 2; //stickerPackageId
        $stickerId = 34; //stickerId

        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        // curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$stickerId);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, $message3);

        $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $token3 . '');
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);

        curl_close($chOne);
    }
}
