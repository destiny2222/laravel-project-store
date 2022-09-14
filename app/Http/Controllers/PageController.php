<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function welcome(){
        // return view('welcome', [
        //     'product'=>Product::get()
        // ]);

        $product = Product::get();
        return view('welcome', compact('product'));
    }
}
