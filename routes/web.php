<?php

use Illuminate\Support\Facades\Auth;
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
//Auth::routes();
Route::get('logout','\App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('login','\App\Http\Controllers\AuthController@index')->name('login');
Route::post('login','\App\Http\Controllers\AuthController@login')->name('login.process');

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::resource('products', ProductController::class);
});

Route::get('home',function (){
    return redirect('test_layout');
})->name('home');
Route::get('/',function (){
    return redirect('test_layout');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::resource('students', StudentController::class);

});

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::resource('product_type', \App\Http\Controllers\ProductTypeController::class);
});

Route::get('/test_layout',function (){
    return view("layouts.app");
});
