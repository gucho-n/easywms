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

Route::get('/shipin','App\Http\Controllers\ShipInController@index')->name('shipin'); 

Route::post('store', 'App\Http\Controllers\ShipInController@create')->name('store');

Route::get('/shipout','App\Http\Controllers\ShipoutController@index')->name('shipout'); 

Route::post('shipoutStore', 'App\Http\Controllers\ShipoutController@create')->name('shipoutStore');

Route::get('transport', 'App\Http\Controllers\TransportController@index')->name('transport');

Route::get('list', 'App\Http\Controllers\ListController@index')->name('list');

Route::get('/shipout/{id}', 'App\Http\Controllers\ListController@update')->name('list');

Route::get('/location','App\Http\Controllers\LocationController@index')->name('location');

Route::post('/locationResister', 'App\Http\Controllers\LocationController@create')->name('locationResister');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
