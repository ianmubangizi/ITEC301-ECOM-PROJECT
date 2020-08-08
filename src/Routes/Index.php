<?php
//Error Routes
use Mubangizi\Route;

Route::get('/server-error', '500');
Route::get('/page-not-found', '404');

// Page Routes
Route::set('/', 'index');
Route::get('/about-us', 'about-us');
Route::get('/contact-us', 'contact-us');

// Shop
Route::set('/shop-cart', 'cart', 'ShopController@cart');
Route::set('/shop-products', 'shop', 'ShopController@index');