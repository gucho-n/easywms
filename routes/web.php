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

// 全ユーザ
// Route::group(['middleware' => ['auth', 'can:user-higher']], function () {

Route::get('/', function () {
    return view('auth/login');
});

//入庫

Route::get('/shipin','App\Http\Controllers\ShipInController@index')->name('shipin'); 

Route::post('store', 'App\Http\Controllers\ShipInController@create')->name('store');

//出庫

Route::get('/shipout','App\Http\Controllers\ShipoutController@index')->name('shipout'); 

Route::post('shipoutStore', 'App\Http\Controllers\ShipoutController@create')->name('shipoutStore');

Route::match(array('GET', 'POST'),'shipout/confirm/{id}', 'App\Http\Controllers\ShipoutController@show')->name('shipoutconfirm');
//getにもポストにもなってしまう。
//在庫移動

Route::get('transport', 'App\Http\Controllers\TransportController@index')->name('transport');

Route::get('list', 'App\Http\Controllers\ListController@index')->name('list');

// Route::get('/shipout/{id}', 'App\Http\Controllers\ListController@update')->name('list');

Route::get('/location','App\Http\Controllers\LocationController@index')->name('location');

Route::post('/locationResister', 'App\Http\Controllers\LocationController@create')->name('locationResister');

Route::post('/transportchoose', 'App\Http\Controllers\TransportController@create')->name('transportchoose');


// Route::post('transportdecide', 'App\Http\Controllers\TransportController@update')->name('transportdecide');



// Route::get('register', 'App\Http\Controllers\Auth\RegisterController@index')->name('register');

// Route::post('shipoutlist{id}', 'App\Http\Controllers\ShipoutController@update')->name('transportdecide');


// Auth::routes();（削除）

//以降設定変更
Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
 
Route::get('/password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset');
 
/*
|-------------------------------------------------------------------------
| 管理者以上で操作
|-------------------------------------------------------------------------
 */
  Route::group(['middleware' => ['guest', 'can:user-higher']], function () {
  //ユーザー登録
  Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');
});

// 元々あった
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// });