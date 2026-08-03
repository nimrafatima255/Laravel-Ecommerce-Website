<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;



class OrderController extends Controller
{


    public function store(Request $request)
    {


        $request->validate([

            'name'=>'required',

            'email'=>'required|email',

            'phone'=>'required',

            'address'=>'required'

        ]);



        $cartItems = Cart::where(
            'user_id',
            auth()->id()
        )
        ->with('product')
        ->get();



        $total = 0;


        foreach($cartItems as $item)
        {

            $total += 
            $item->product->price *
            $item->quantity;

        }




        $order = Order::create([

            'user_id'=>auth()->id(),

            'name'=>$request->name,

            'email'=>$request->email,

            'phone'=>$request->phone,

            'address'=>$request->address,

            'total'=>$total

        ]);





        foreach($cartItems as $item)
        {

            OrderItem::create([

                'order_id'=>$order->id,

                'product_id'=>$item->product_id,

                'quantity'=>$item->quantity,

                'price'=>$item->product->price

            ]);

        }




        Cart::where(
            'user_id',
            auth()->id()
        )->delete();



        return view(
            'orders.success',
            compact('order')
        );


    }



}