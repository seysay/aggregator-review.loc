<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Core/DB.php';

$dotenv = Dotenv\Dotenv::create( '/var/www/aggregator-review.loc/');
$dotenv->load();

$router = new \Bramus\Router\Router();

require_once "../app/Core/Route.php";

$router->run();
