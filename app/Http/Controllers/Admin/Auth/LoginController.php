<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginReguest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin.logged-in')->except('logout');
    }

    public function showloginform(Request $request){
        return view('admin.auth.login');
    }


    public function login(AdminLoginReguest $request){

        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::ADMIN);

        // $credentials = $request->validate([
        //     'email'=>['required', 'email'],
        //     'password'=>['required'],
        // ]);

        // if (Auth::guard('admin')->attempt($credentials)){
        //     $request->session()->regenerate(); // this invalidate the guest user's current session
        //     return redirect()->intended(RouteServiceProvider::ADMIN)->with('status', 'Admin login Successfully');
        // }

        // return back()->withErrors([
        //     'email'=>'The provide data does not match any of our records'
        // ])->onlyInput('email');
    }

    

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); // this regenerate the csrf token
        return redirect()->to(RouteServiceProvider::WELCOME);
    }
}
