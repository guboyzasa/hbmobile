<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\ThaiRegion;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    public function index()
    {
        // $img = Storage::disk('spaces')->get('images/agents/163215661669.jpeg');

       
        $thaiRegions = ThaiRegion::all();
        return view('admin.agents.index', compact('thaiRegions'));
    }

    public function show()
    {
        return datatables()->of(
            Agent::query()->with('thaiRegion', 'user')->orderBy('id', 'asc')
        )->toJson();
    }

    public function store(Request $req)
    {

        // return $req->all();

        $id = $req->id;
        $name = $req->name;
        $base64_image = $req->imgbase64;
        $address = $req->address;
        $tel1 = $req->tel1;
        $tel2 = $req->tel2;
        $facebook = $req->facebook;
        $facebookLink = $req->facebookLink;
        $thaiRegion = $req->thaiRegion;
        $line = $req->line;

        
        if($id == null && Agent::where('name', $name)->first() != null){
            $data = [
                'title' => 'บันทึกไม่สำเร็จ!',
                'msg' => 'ชื่อนี้ถูกสร้างแล้ว',
                'status' => 'warning',
            ];
            return $data;
        }
        // return 'OUTIF';

        $agent = Agent::find($id);

        DB::beginTransaction();

        if ($agent == null) {
            $agent = new Agent;
            $agent->is_active = 1;
        }

        $path = 'hbImages/agents/';

        if ($base64_image != null && preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
            $data = substr($base64_image, strpos($base64_image, ',') + 1);
            $base64_decode = base64_decode($data);
            $extension = explode('/', explode(':', substr($base64_image, 0, strpos($base64_image, ';')))[1])[1];
            $filename = strtotime(Carbon::now()) . rand(1, 100) . '.' . $extension;
            // Storage::put('public' . $path . $filename, $base64_decode);
            Storage::disk('spaces')->put($path . $filename, $base64_decode);
            $fullPath = 'hbImages/agents/' . $filename;
            $agent->img = $fullPath;
        } else {
            // $data = [
            //     'title' => 'บันทึกไม่สำเร็จ!',
            //     'msg' => 'รูปภาพไม่ถูกต้อง',
            //     'status' => 'success',
            // ];
            // return $data;
            // dd('Base64 not match');
        }
        // if ($req->hasFile('imageFile')) {
        //     $imageName = time() . '.' . $req->imageFile->extension();
        //     $req->imageFile->move(public_path('assets/images/category/'), $imageName);
        //     $path = 'assets/images/category/' . $imageName;
        // }

        $agent->name = $name;
        $agent->address = $address;
        $agent->line = $line;
        $agent->tel1 = $tel1;
        $agent->tel2 = $tel2;
        $agent->facebook = $facebook;
        $agent->facebook_link = $facebookLink;
        $agent->thai_region_id = $thaiRegion;
        $agent->save();

        DB::commit();

        // return $agent;
        $data = [
            'title' => 'บันทึกสำเร็จ!',
            'msg' => 'บันทึกตัวแทนจำหน่ายสำเร็จ',
            'status' => 'success',
        ];
        return $data;
    }

    public function changeStatus(Request $req)
    {

        $id = $req->id;

        DB::beginTransaction();

        $status = 0;
        $agent = Agent::find($id);
        if ($agent == null) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'แก้ไขไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];

            return $data;
        }
        $oldStatus = $agent->is_active;

        if ($oldStatus == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $agent->is_active = $status;
        $agent->save();

        DB::commit();

        $data = [
            'title' => 'สำเร็จ!',
            'msg' => 'แก้ไขสำเร็จ',
            'status' => 'success',
        ];

        return $data;
    }

    public function destroy(Request $req)
    {
        $id = $req->id;

        $agent = Agent::find($id);
        if ($agent == null) {
            $data = [
                'title' => 'ผิดพลาด!',
                'msg' => 'ลบไม่สำเร็จกรุณาติดต่อผู้พัฒนา',
                'status' => 'error',
            ];

            return $data;
        } else {

            $imgPath = $agent->img;
            Storage::disk('spaces')->delete($imgPath);
            Agent::find($id)->delete();

            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'ลบตัวแทนจำหน่ายสำเร็จ',
                'status' => 'success',
            ];

            return $data;
        }
    }

    public function checkAgent(Request $req)
    {
        $username = '';
        $agent = Agent::find($req->id);
        if($agent ){
            $user = User::find($agent->user_id);
            if($user){
                $username = $user->username;
            }
        }
        
        return $username;
    }

    public function createUser()
    {
        $agents = Agent::all();
        return view('admin.agents.create-user', compact('agents'));
    }

    public function storeUser(Request $req)
    {
    //    return $req->all();
        $newUserName = $req->new_username;
        $newPassword = $req->new_password;
        $againPassword = $req->again_password;
        $agentId = $req->agent;

        DB::beginTransaction();

        $agent = Agent::find($agentId);
        if(!$agent){
            $data = [
                'title' => 'ไม่สำเร็จ!',
                'msg' => 'ไม่พบตัวแทนจำหน่าย',
                'status' => 'error',
            ];

            return $data;
        }

        if($newPassword != $againPassword)
        {
            $data = [
                'title' => 'ไม่สำเร็จ!',
                'msg' => 'รหัสผ่าน และรหัสผ่านอีกครั้งไม่ตรงกัน',
                'status' => 'error',
            ];

            return $data;
        }
   

        if($agent && $agent->user_id == null){
            // return "if";
            if (User::where('username', $newUserName)->first()) {
                $data = [
                    'title' => 'ไม่สำเร็จ!',
                    'msg' => 'username นี้ถูกใช้แล้ว',
                    'status' => 'error',
                ];

                return $data;
            }

            $name = $agent->name;
            $email = $newUserName.'-hbmobile.com';
            $username = $newUserName;
            $pass = $newPassword;

            $user = new User;
            $user->name = $name;
            $user->email = $email;
            $user->username = $username;
            $user->password = Hash::make($pass);
            $user->is_agent = 1;
            $user->is_admin = 0;
            $user->save();

            $agent->user_id = $user->id;
            $agent->save();

        }else if($agent && $agent->user_id != null && User::find($agent->user_id)){
            // return 'ELSE';
            $name = $agent->name;
            $email = $newUserName;
            $username = $newUserName;
            $pass = $newPassword;

            $user = User::find($agent->user_id);
            $user->username = $username;
            $user->password = Hash::make($pass);
            $user->is_agent = 1;
            $user->is_admin = 0;
            $user->save();

           

        }else{

        }

        DB::commit();

        $data = [
            'title' => 'สำเร็จ!',
            'msg' => 'สร้างรหัสผ่าน Acount ให้ตัวแทนจำหน่ายสำเร็จ',
            'status' => 'success',
        ];

        return $data;
    }
}
