<?php

/**
 * @var array. Array of all existing addresses.
 * Key is an address, value is a controller, model and action that are associated with that address
 */
return $routesArray = [
    '/' => ['controller' => 'GoodsController', 'action' => 'index'],
    '/create' => ['controller' => 'GoodsController', 'action' => 'create'],
    '/edit/' . $uriSegment => ['controller' => 'GoodsController', 'action' => 'edit'],
    '/delete/' . $uriSegment => ['controller' => 'GoodsController', 'action' => 'delete'],
];
