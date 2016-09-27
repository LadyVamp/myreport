<?php

return array(
    // Товар:
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    // Корзина:
    'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController    
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController
    
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController     
);
