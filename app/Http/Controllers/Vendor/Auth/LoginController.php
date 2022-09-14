<?php

namespace App\Http\Controllers\Vendor\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('vendor.logged-in')->except('logout');
    }

    public function showloginform(Request $request){
        return view('vendor.Auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>['required', 'string'],
            'password'=>['required'],
        ]);

        // if (is_numeric($request->get('email'))) {
        //     return ['mobile' => $request->get('email'), 'password' => $request->get('password')];
        // } elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
        //     return ['email' => $request->get('email'), 'password' => $request->get('password')];
        // }

        return $request->only($request->get('email'), 'password');


        if (Auth::guard('vendor')->attempt($credentials)){
            $request->session()->regenerate(); // this invalidate the guest user's current session
            return redirect()->intended(RouteServiceProvider::VENDOR)->with('status', 'login Successfully');
        }

        return back()->withErrors([
            'email'=>'The provide data does not match any of our records'
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); // this regenerate the csrf token
        return redirect()->to(RouteServiceProvider::WELCOME);
    }
}
