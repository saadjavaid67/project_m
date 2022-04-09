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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/request', [App\Http\Controllers\ProductRequestController::class, 'index'])->name('product.request');
Route::get('/product/request/supplier/quotation', [App\Http\Controllers\ProductRequestController::class, 'supplier_quotation_show'])->name('product.request.supplier.quotation.show');
