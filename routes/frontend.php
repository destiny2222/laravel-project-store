<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::resource('products', ProductController::class);

Route::get('/', [PageController::class, 'welcome']);
Route::post('/add-to-cart', [CartController::class, 'index'])->name('addTocart');
Route::get('test', function (Request $request){
    dd($request->session()->get('cart'));
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');