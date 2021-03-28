<?php

/**
 * @var array. Array of all existing providers
 */
return $providers = array(
    'View' => '\App\Core\Providers\ViewServiceProvider',
    'PDO' => '\App\Core\Providers\PDOServiceProvider',
    'Goods' => '\App\Core\Providers\GoodsServiceProvider',
    'GoodsController' => '\App\Core\Providers\GoodsControllerServiceProvider',
    'Reviews' => '\App\Core\Providers\ReviewsServiceProvider',
    'ReviewsController' => '\App\Core\Providers\ReviewsControllerServiceProvider',
);

