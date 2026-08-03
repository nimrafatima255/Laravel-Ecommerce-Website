<?php

namespace App\Http\Controllers;


use App\Models\Category;



class CategoryController extends Controller
{


    public function show(Category $category)
    {

        $products = $category
                    ->products()
                    ->where('status',1)
                    ->get();



        return view(
            'categories.show',
            compact(
                'category',
                'products'
            )
        );

    }

}