<?php

/**
 * @var array. Array of all existing addresses.
 * Key is an address, value is a controller, model and action that are associated with that address
 */
return $routesArray = [
    '/' => ['controller' => 'GoodsController', 'action' => 'index'],
    '/test/student/add' => array('controller' => 'StudentController', 'action' => 'addStudentAction'),
    '/test/student/edit/'. $uriSegment => array('controller' => 'StudentController', 'action' => 'editStudentAction'),
    '/test/student/delete/'. $uriSegment => array('controller' => 'StudentController', 'action' => 'deleteStudentAction'),
];
