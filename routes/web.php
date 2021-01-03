<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Syukur\SyukurController;
use App\Http\Livewire\Syukur\Index as SyukurIndex;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::group(['prefix' => 'syukur', 'as' => 'syukur.'], function () {
        Route::get('/', SyukurIndex::class)->name('index');
    });
});
