<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;



/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
*/


Route::get('/',
[HomeController::class,'index'])
->name('home');



Route::resource(
    'products',
    ProductController::class
)
->only([
    'index',
    'show'
]);



Route::get(
'/category/{category}',
[CategoryController::class,'show']
)
->name('category.show');





/*
|--------------------------------------------------------------------------
| Cart & Checkout
|--------------------------------------------------------------------------
*/


Route::middleware('auth')->group(function(){



Route::get(
'/cart',
[CartController::class,'index']
)
->name('cart.index');



Route::post(
'/cart/add/{product}',
[CartController::class,'add']
)
->name('cart.add');



Route::delete(
'/cart/{cart}',
[CartController::class,'remove']
)
->name('cart.remove');




Route::get(
'/checkout',
[CheckoutController::class,'index']
)
->name('checkout');



Route::post(
'/order',
[OrderController::class,'store']
)
->name('order.store');



});





/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::middleware([
    'auth',
    'admin'
])
->prefix('admin')
->name('admin.')
->group(function(){



Route::get(
'/dashboard',
[DashboardController::class,'index']
)
->name('dashboard');



Route::resource(
'products',
AdminProductController::class
);



Route::resource(
'categories',
AdminCategoryController::class
);



Route::resource(
'orders',
AdminOrderController::class
)
->only([
    'index',
    'update'
]);



});



require __DIR__.'/auth.php';