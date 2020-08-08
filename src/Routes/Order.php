<?php

// Order
use Mubangizi\Route;

Route::set('/order/review', 'order-review', 'OrderController@checkout');
Route::set('/order/payment', 'order-payment', 'ShopController@checkout');
Route::set('/order/checkout', 'order-checkout', 'ShopController@checkout');
Route::set('/order/shipping', 'order-shipping', 'ShopController@checkout');