<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;

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

Route::resource('product_type', \App\Http\Controllers\ProductTypeController::class);
Route::resource('products', ProductController::class);
Route::resource('students', StudentController::class);

Route::get('/test_layout',function (){
    return view("layouts.app");
});
