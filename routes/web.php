<?php

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
    return redirect('/home');
});

Route::get('/demoadmin', function () {
    return view('admin.demoadmin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function (){
    Route::get('/orders', 'OrderController@index')->name('adminOrders');
    Route::get('/orders/edit/{order_id}', 'OrderController@edit')->name('adminEditOrder');
    Route::put('/orders/edit/{order_id}', 'OrderController@update')->name('adminUpdateOrder');
    Route::get('/orders/delete/{order_id}', 'OrderController@destroy')->name('adminDeleteOrder');
});
