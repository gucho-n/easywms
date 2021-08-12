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
    return view('auth/login');
});

Route::get('/shipin','App\Http\Controllers\ShipInController@index'); 

Route::get('/side', function () {
    return view('side');
});

Route::get('/translate', function () {
    return view('translate');
});

Route::get('/shipout', function () {
    return view('shipout');
});

Route::get('/list', function () {
    return view('list');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
