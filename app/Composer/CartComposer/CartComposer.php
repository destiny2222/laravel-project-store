<?php

namespace App\Composer\CartComposer;

use Illuminate\View\View;

class CartComposer{
    public function compose(View $view){
        $item = request()->session()->has('cart') ? count(request()->session()->get('cart')->items) : 0;
        $view->with('cartCount', $item);
    }
}