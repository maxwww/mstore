<?php

return [
    "root" => [
        "pattern" => "/",
        "method" => "GET",
        "action" => "Mystore\\Controllers\\IndexController@index"
    ],
    "product_list" =>
        [
            "pattern" => "/product",
            "method" => "GET",
            "action" => "Mystore\\Controllers\\IndexController@getAllproducts"
        ],
    "single_product" => [
        "pattern" => "/product/{id}",
        "method" => "GET",
        "variables" => [
            "id" => "\d+"
        ],
        "action" => "Mystore\\Controllers\\IndexController@getProduct"
    ]
];