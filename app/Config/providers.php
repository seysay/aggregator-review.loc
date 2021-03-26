<?php

/**
 * @var array. Array of all existing providers
 */
return $providers = array(
    'View' => '\App\Core\Providers\ViewServiceProvider',
    'PDO' => '\App\Core\Providers\PDOServiceProvider',
//    'Books' => '\App\Core\Providers\BooksServiceProvider',
    'Students' => '\App\Core\Providers\StudentsServiceProvider',
    'StudentController' => '\App\Core\Providers\StudentControllerServiceProvider',
//    'BookController' => '\App\Core\Providers\BookControllerServiceProvider',
);

