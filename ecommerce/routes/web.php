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
Route::get('/product',[\App\Http\Controllers\ProductController::class,'index'])->name('product');
Route::get('/basket',[\App\Http\Controllers\BasketController::class,'index'])->name('basket');

