<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;


class HomeController extends Controller
{

    public function index()
    {

        $products = Product::where('status',1)
                    ->latest()
                    ->take(8)
                    ->get();


        $categories = Category::where('status',1)
                    ->get();



        return view('home', compact(
            'products',
            'categories'
        ));

    }

}