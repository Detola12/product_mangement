<?php

use Illuminate\Support\Facades\Route;

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

/**************************Transaction Routes*********************************/
Route::get('/', [\App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');

Route::get('/transactions/store/{customer}', [\App\Http\Controllers\TransactionController::class,'create'])->name('create_transaction');

Route::post('/transactions/store/{customer}', [\App\Http\Controllers\TransactionController::class,'store'])->name('store_transaction');

Route::get('/transaction/delete/{transaction}', [\App\Http\Controllers\TransactionController::class,'delete'])->name('delete_transaction');

/****************************Customer Routes************************************/
Route::get('/customers', [\App\Http\Controllers\CustomerController::class,'index'])->name('customer');

Route::post('/customers', [\App\Http\Controllers\CustomerController::class,'create'])->name('store_customer');

Route::post('/customers/{customer}', [\App\Http\Controllers\CustomerController::class,'edit'])->name('edit_customer');

Route::get('/customers/delete/{customer}', [\App\Http\Controllers\CustomerController::class,'delete'])->name('delete_customer');

/******************************Category Routes*************************************/
Route::get('/category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('create_category');

Route::post('/category/create', [\App\Http\Controllers\CategoryController::class,'store'])->name('store_category');


/*******************************Payment Routes**************************************/
Route::get('/payment/create/{transaction}', [\App\Http\Controllers\PaymentController::class, 'index'])->name('create_payment');

Route::post('/payment/create/{transaction}', [\App\Http\Controllers\PaymentController::class, 'store'])->name('store_payment');



Route::post('/fetch-data/{category}/{amount}', [\App\Http\Controllers\TransactionController::class,'check_price'])->name('check_price');
