<?php

namespace App\Core;

use App\Config\DBConfig;

/**
 * Class AbstractModel. Contains __construct and method for validation data
 * @package App\Core
 */
abstract class AbstractModel
{
    /**
     * @var object PDO. Connection to Data Base
     */
    protected $db;

    /**
     * Model constructor.
     * @param \PDO $db
     */
    public function __construct()
    {
        $this->db = new \PDO($dsn = 'mysql:dbname=aggregator_review_loc;host=localhost', $username = 'root', $passwd = '123', $options = null);
    }

    /**
     * This method receive data, that need cleaning and executes it.
     * @param array $data Data for validation
     * @return mixed
     */
    protected function clear($data)
    {
        foreach ($data as &$d) {
            $d = trim(strip_tags($d));
        }

        return $data;
    }
}
