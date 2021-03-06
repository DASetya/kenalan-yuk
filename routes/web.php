<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Syukur\Index as SyukurIndex;
use App\Http\Livewire\Mood\Index as MoodIndex;
use App\Http\Livewire\MyStory\Index as MyStoryIndex;
use App\Http\Livewire\Psychologist\Index as PsychologistIndex;
use App\Http\Livewire\Auth\Index as AuthIndexMine;

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

// Route::get('/', function () {
//     return redirect()->route('dashboard');
//     // return view('welcome');
// })->name('index');

Route::get('/', AuthIndexMine::class)->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::group(['prefix' => 'syukur', 'as' => 'syukur.'], function () {
        Route::get('/', SyukurIndex::class)->name('index');
    });

    Route::group(['prefix' => 'mood', 'as' => 'mood.'], function () {
        Route::get('/', MoodIndex::class)->name('index');
    });

    Route::group(['prefix' => 'my-story', 'as' => 'my-story.'], function () {
        Route::get('/', MyStoryIndex::class)->name('index');
    });

    Route::group(['prefix' => 'psychologist', 'as' => 'psychologist.'], function () {
        Route::get('/', PsychologistIndex::class)->name('index');
    });
});
