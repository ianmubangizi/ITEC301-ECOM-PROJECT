<?php

// Order
use Mubangizi\Route;


// Shop
Route::set('/products', 'shop', 'ShopController@index');

Route::set('/order/cart', 'order-cart', 'ShopController@order');
Route::set('/order/review', 'order-review', 'ShopController@order');
Route::set('/order/payment', 'order-payment', 'ShopController@order');
Route::set('/order/details', 'order-details', 'ShopController@order');
Route::set('/order/shipping', 'order-shipping', 'ShopController@order');