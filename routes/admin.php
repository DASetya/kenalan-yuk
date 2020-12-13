<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::namespace('Auth')->group(function() {
    Route::middleware('guest:admin')->group(function() {
        // Route::get('/login', 'LoginController@index')->name('login');
        // Route::post('/login', 'LoginController@login')->name('login');
        // Route::post('/login/get-serial-number', 'SerialController@index');
    });
});

Route::get('/', function () {
    return view('admin.dashboard.index');
});
