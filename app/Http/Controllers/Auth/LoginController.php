<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){

        if( Auth()->user()->is_admin == 1){
            return route('admin.index');
        }elseif( Auth()->user()->is_agent == 1){
            return route('agent-member.dashboard');
        }else{
            return route('index');
        } 
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        // dd($request->all());
        $input = $request->all();
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ]);

        if( auth()->attempt(array('username'=>$input['username'], 'password'=>$input['password'])) ){

            if( auth()->user()->is_admin == 1 ){
                return redirect()->route('admin.index');
            }elseif( auth()->user()->is_agent == 1 ){
                return redirect()->route('agent-member.index');
            }else{
                return redirect()->route('index');
            }
            

        }else{
            return redirect()->back()->with('error','username หรือ password ไม่ถูกต้อง');
        }
    }
}
