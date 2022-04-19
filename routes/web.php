<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;

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



// BEGIN:Client routes
Route::resource('client', ClientController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('user', UserController::class);
// END:Client routes

// BEGIN:Product Request routes
Route::prefix('product/request')->controller(App\Http\Controllers\ProductRequestController::class)->group(function () {
    Route::get('new', 'new_request_show')->name('product.request.new.show');
    Route::get('supplier/quotation', 'supplier_quotation_show')->name('product.request.supplier.quotation.show');
    Route::get('prepare/quotation', 'prepare_quotation_show')->name('product.request.prepare.quotation.show');
    Route::get('purchase/order', 'purchase_order_show')->name('product.request.purchase.order.show');
    Route::get('pick/up', 'pick_up_show')->name('product.request.pick.up.show');
    Route::get('delivery', 'delivery_show')->name('product.request.delivery.show');
    Route::get('finalize', 'finalize_show')->name('product.request.finalize.show');
    Route::get('detail', 'detail_show')->name('product.request.detail.show');
});
// END:Product Request routes
