<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::controller(LoginController::class)->group(function (){
        Route::get('login', 'showLoginForm')->name('loginForm');
        Route::post('login', 'login')->name('login');  
        Route::post('logout','logout')->name('logout');
    });
    Route::get('/', [ HomeController::class,'home' ])->name('home');
   
});

Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



