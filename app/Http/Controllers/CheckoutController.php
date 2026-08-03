<?php

namespace App\Http\Controllers;


use App\Models\Cart;



class CheckoutController extends Controller
{


    public function index()
    {


        $cartItems = Cart::where(
            'user_id',
            auth()->id()
        )
        ->with('product')
        ->get();



        return view(
            'orders.create',
            compact('cartItems')
        );


    }


}