<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/send-email', [App\Http\Controllers\HomeController::class, 'sendEmail'])->name('send-email');
Route::get('/category/{category}', 'App\Http\Controllers\ProductController@showCategory')->name('showCategory');
Route::get('/category/{category}/{product_id}', 'App\Http\Controllers\ProductController@show')->name('showProduct');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cartIndex');



Route::middleware(['role:admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    Route::get('/admin/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products');
    Route::get('/admin/products/add', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.product.add');
    Route::post('/admin/products/add', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.product.post');
    //Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
});
