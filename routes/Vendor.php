<?php

use App\Http\Controllers\Vendor\Auth\LoginController;
use App\Http\Controllers\Vendor\Auth\RegisterController;
use App\Http\Controllers\Vendor\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('vendor')->name('vendor.')->group(function(){
    Route::controller(LoginController::class)->group(function (){
        Route::get('login', 'showloginform')->name('loginform');
        Route::post('login', 'login')->name('login');
        Route::post('logout', 'logout')->name('logout');
    });

    Route::controller(RegisterController::class)->group(function (){
        Route::get('register', 'showregisterform')->name('registerform');
        Route::post('register', 'register')->name('register');
        Route::post('logout', 'logout')->name('logout');
    });


    Route::get('/', [HomeController::class, 'home'])->name('home');
});