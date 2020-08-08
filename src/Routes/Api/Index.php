<?php

use Mubangizi\Route;
use Mubangizi\Views\Page;

Route::post('/api/products', 'products', function () {
    if (is_auth()) {
        var_dump($_REQUEST);
    } else {
        render(new Page('404'));
    }
});


//Route::post('/api/text|app,text,info', 'text', function ($app, $text, $info) {
//    var_dump($app, $text, $info);
//    if (is_auth()) {
//        echo "Admin Post Action";
//    } else {
//        render(new Page('404'));
//    }
//});