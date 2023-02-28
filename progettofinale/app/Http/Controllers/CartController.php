<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        //  session(['key' => 'value']);
        session()->push('cart', ['id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $request->image]);

        session()->flash('success', 'Product is Added to Cart Successfully !');

        // var_dump(session('cart'));

        return redirect()->route('cart.list');
    }

    public function cartList(Request $request)
    {
        return view('home.cart', $request);
    }
}
