<?php

use Mubangizi\Models\Product;
use Mubangizi\Route;
use Mubangizi\Views\Page;

Route::post('/api/products', 'products', function () {
    if (is_auth()) {
        list(
            'product-name' => $name,
            'product-details' => $details,
            'product-price' => $price,
            'product-sale' => $sale,
            'product-tags' => $tags,
            'product-inventory' => $inventory
            ) = $_REQUEST;

        $upload = check_file_upload('product-image');
        if (isset($upload['error'])) {
            echo json_encode($upload);
        } elseif (isset($upload['file'])) {
            $result = Product::create($name, $sale, str_replace('\\', '/', $upload['file']), $price, "$details\n$tags", $inventory);
            var_dump($result);
        }
    } else {
        render(new Page('404'));
    }
});


//Route::post('/api/text|app,text,info', 'text', function ($app, $text, $info) {