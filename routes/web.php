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

Route::get('/gio-hang','CartController@index')->name('show-cart');

Route::get('/them-gio-hang/{product_id}','CartController@getAddToCart')->name('add-to-cart');

Route::get('check-out',['uses'=>'CartController@getCheckout','as'=>'checkout']);

Route::get('/gio-hang/cap-nhat-sp/{product_id}','CartController@getUpdateCart')->name('update-cart');

Route::get('/gio-hang/cap-nhat/{product_id}','CartController@getUpdateQtyCart')->name('update-qty-cart');

Route::get('/gio-hang/xoa-cap-nhat/{product_id}','CartController@getDeleteQtyCart')->name('delete-qty-cart');

Route::get('/gio-hang/xoa-san-pham/{product_id}','CartController@getDeleteProductCart')->name('delete-product-cart');

Route::get('/gio-hang/xoa-gio-hang','CartController@getDeleteCart')->name('delete-cart');

Route::get('/dat-hang','OrderController@showOrder')->name('dat-hang');

Route::get('/demoadmin', function () {
    return view('admin.demoadmin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    
    Route::get('/orders', 'OrderController@index')->name('adminOrders');
    
    Route::get('/orders/edit/{order_id}', 'OrderController@edit')->name('adminEditOrder');
    
    Route::put('/orders/edit/{order_id}', 'OrderController@update')->name('adminUpdateOrder');
    
    Route::get('/orders/delete/{order_id}', 'OrderController@destroy')->name('adminDeleteOrder');
});

// View::composer('*', function ($view) {
//     $view->products = Cart::content();
//     $view->totalPrice = Cart::subtotal();
// });
