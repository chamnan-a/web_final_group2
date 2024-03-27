<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserAccessMiddleware;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoiceController;
use App\Models\Invoice;
use App\Http\Controllers\InvoiceDescriptionController;
use App\Models\InvoiceDescription;
use App\Http\Controllers\User1Controller;
use App\Models\User1;

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
    Route::resource('students', StudentController::class);
});

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::resource('users', UserController::class);
});

Route::get('home',function (){
    return redirect('test_layout');
})->name('home');
Route::get('/',function (){
    return redirect('login');
});

Route::get('frontend',function (){
    return view('frontend.app');
})->name('frontend');

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    
    Route::resource('products', ProductController::class);

});

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::resource('product_type', \App\Http\Controllers\ProductTypeController::class);
});

Route::get('/test_layout',function (){
    return view("layouts.app");
});

Route::get('/drink', function () {
    return view('frontend.drink');
});

Route::get('/food', function () {
    return view('frontend.drink');
});

Route::get('/bakery', function () {
    return view('frontend.bakery');
});


Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::resource('user1', User1Controller::class);
    Route::resource('employees', EmployeeController::class);
    // Route::resource('users', UserController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('invoicedescriptions', InvoiceDescriptionController::class);
   
    
});


// Route::middleware(['auth', UserAccessMiddleware::class])->group(function () {
//     Route::resource('users', UserController::class);
// });

