<?php

namespace App\Http\Controllers\Vendor\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRegisterRequest;
use App\Models\Vendor;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\ServerBag;

class RegisterController extends Controller
{
    //

    public function __construct()
    {
         $this->middleware('vendor.logged-in');
    }

    public function showregisterform(){
        return view('vendor.Auth.register');
    }

    public function register(VendorRegisterRequest $request){
        try{
            $vendor = Vendor::create([
                'name'=>$request->validated()['name'],
                'email'=>$request->validated()['email'],
                'password'=>Hash::make($request->validated()['password']),
            ]);

            Auth::guard('vendor')->login($vendor);
            $request->session()->regenerate();
            return redirect()->to(RouteServiceProvider::VENDOR);
        } catch(\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Something Went Worry');
        }

    }
}
