<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    //
    public function index(Request $request){
            // dd( $request->product_id);
            try {
                $product = Product::findOrFail($request->product_id);
                // dd();
                $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
                $newCart = new Cart($oldCart);
                $newCart->add($product,$product->product_id);
                $request->session()->put('cart', $newCart);
                return back()->with('status','Cart Updated');
            } catch (\Exception $exception){
                Log::error($exception->getMessage());
                return back()->with('status', 'This product is not available');
            }
    }
}
