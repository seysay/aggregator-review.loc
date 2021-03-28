<?php

namespace App\Config;

/**
 * Class DBConfig. Contains static variable with data  base configurations
 * @package App\Config
 */
class DBConfig
{
    /**
     * @var array. Array of data base configurations
     */
    public static $dbConfig = array(
        'user' => 'root',
        'pass' => '123',
        'host' => 'localhost',
        'database' => 'aggregator_review_loc',
        );
}
