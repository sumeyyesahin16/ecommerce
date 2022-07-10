<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[\App\Http\Controllers\MainController::class,'index'])->name('index');
Route::get('/category/{category_name}',[\App\Http\Controllers\CategoryController::class,'index'])->name('category');
Route::get('/product/{slug_productname}',[\App\Http\Controllers\ProductController::class,'index'])->name('product');
Route::get('/basket',[\App\Http\Controllers\BasketController::class,'index'])->name('basket');
Route::get('/payment',[\App\Http\Controllers\PaymentController::class,'index'])->name('payment');
Route::get('/order',[\App\Http\Controllers\OrderController::class,'index'])->name('order');
Route::get('/order/{id}',[\App\Http\Controllers\OrderController::class,'detail'])->name('order');


Route::group(['prefix'=>'user'],function (){
    Route::get('/login',[\App\Http\Controllers\UserController::class,'login'])->name('user.login');
    Route::get('/register',[\App\Http\Controllers\UserController::class,'register'])->name('user.register');
});



