<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    
    Route::get('/products',[ProductController::class,'index'])->name('product.index');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/product/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/order/',[ProductController::class,'orderView'])->name('product.order');
   
    Route::get('/orderpage',[OrderController::class,'create'])->name('order.create');

    Route::post('/order/{id}',[OrderController::class,'store'])->name('order.store');
    Route::get('/dashboard',[OrderController::class,'view'])->name('order.dashboard');
    

});