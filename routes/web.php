<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VipController;

;

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

/**
 * Customer Routes
 * **/
Route::get('customer',[CustomerController::class,'index'])->name('customer');//Add
Route::get('all',[CustomerController::class,'all'])->name('customer/all');//Display All
Route::get('edit/{id}',[CustomerController::class,'edit'])->name('customer/edit');//edit
Route::post('store',[CustomerController::class,'store'])->name('customer/create');//create
Route::post('destroy/{id}',[CustomerController::class,'destroy'])->name('customer/destroy');//delete
Route::post('update',[CustomerController::class,'update'])->name('customer/update');//update

/** 
 * Vip Routes
 ***/
Route::get('vip',[VipController::class,'index'])->name('vip');
Route::post('create',[VipController::class,'create'])->name('vip/create');
Route::get('all',[VipController::class,'all'])->name('vip/all');
Route::get('edit/{id}',[VipController::class,'edit'])->name('vip/edit');
Route::post('update',[VipController::class,'update'])->name('vip/update');
Route::post('destroy/{id}',[VipController::class,'destroy'])->name('vip/destroy');