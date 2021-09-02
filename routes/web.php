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
// 登録画面
Route::get('/auth/register','App\Http\Controllers\AdminRegisterController@index')->name('register');

// shipin
Route::get('/shipin','App\Http\Controllers\ShipInController@index')->name('shipin'); 

Route::post('store', 'App\Http\Controllers\ShipInController@create')->name('store');


// transport
Route::get('transport', 'App\Http\Controllers\TransportController@index')->name('transport');




Route::get('/location','App\Http\Controllers\LocationController@index')->name('location');

Route::post('/locationResister', 'App\Http\Controllers\LocationController@create')->name('locationResister');

Route::post('/transportchoose', 'App\Http\Controllers\TransportController@create')->name('transportchoose');


Route::post('transportdecide', 'App\Http\Controllers\TransportController@update')->name('transportdecide');



Route::get('/shipout','App\Http\Controllers\ShipoutController@index')->name('shipout'); 

Route::post('shipoutStore', 'App\Http\Controllers\ShipoutController@create')->name('shipoutStore');

Route::match(array('GET', 'POST'),'shipout/confirm/{id}', 'App\Http\Controllers\ShipoutController@show')->name('shipoutconfirm');

Route::post('shipoutdeside', 'App\Http\Controllers\ShipoutController@update')->name('shipoutDeside');



Route::get('list', 'App\Http\Controllers\ListController@index')->name('list');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

