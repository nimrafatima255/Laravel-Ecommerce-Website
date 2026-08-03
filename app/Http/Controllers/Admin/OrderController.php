<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;



class OrderController extends Controller
{


    public function index()
    {

        $orders =
        Order::with('user')
        ->latest()
        ->paginate(10);



        return view(
            'admin.orders.index',
            compact('orders')
        );

    }





    public function update(Request $request, Order $order)
    {


        $request->validate([

            'status'=>'required'

        ]);



        $order->update([

            'status'=>$request->status

        ]);



        return back()
        ->with(
            'success',
            'Order Status Updated'
        );


    }


}