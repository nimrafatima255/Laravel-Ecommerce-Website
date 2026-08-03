<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;



class ProductController extends Controller
{


    public function index()
    {

        $products = Product::where('status',1)
                    ->with('category')
                    ->latest()
                    ->paginate(12);


        return view(
            'products.index',
            compact('products')
        );

    }




    public function show(Product $product)
    {

        return view(
            'products.show',
            compact('product')
        );

    }



}