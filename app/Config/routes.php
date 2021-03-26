<?php

/**
 * @var array. Array of all existing addresses.
 * Key is an address, value is a controller, model and action that are associated with that address
 */
return $routesArray = [
    '/' => ['controller' => 'GoodsController', 'action' => 'index'],
    '/create' => ['controller' => 'GoodsController', 'action' => 'create'],
    '/test/student/edit/'. $uriSegment => array('controller' => 'StudentController', 'action' => 'editStudentAction'),
    '/test/student/delete/'. $uriSegment => array('controller' => 'StudentController', 'action' => 'deleteStudentAction'),
];

