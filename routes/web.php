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
    return view('index');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//LIST ALL CUSTOMERS
Route::get('/customers', '\App\Http\Controllers\CustomerController@index');

//ADD NEW CUSTOMER FORM
Route::get('/customers/create', '\App\Http\Controllers\CustomerController@create');
//STORE THE NEW CUSTOMER TO DATABASE
Route::post('/customers', '\App\Http\Controllers\CustomerController@store');

//SHOW A CUSTOMER
Route::get('/customers/{customerId}', '\App\Http\Controllers\CustomerController@show');

//UPDATE CUSTOMER FORM
Route::get('/customers/{customerId}/edit', '\App\Http\Controllers\CustomerController@edit');
//UPDATE THE CUSTOMER TO DATABASE
Route::patch('/customers/{customer}', '\App\Http\Controllers\CustomerController@update');

//DELETE THE CUSTOMER
Route::delete('/customers/{customer}', '\App\Http\Controllers\CustomerController@destroy');
