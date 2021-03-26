<?php

namespace App\Core\Providers;

use Pimple\Container;
use App\Config\DBConfig;
use Pimple\ServiceProviderInterface;

/**This class has method that returns service
 *
 * Class PDOServiceProvider
 * @package App\Core\Providers
 */
class PDOServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['\PDO'] = function ($c) {
            return new \PDO('mysql:host=' . DBConfig::$dbConfig['host'] . ';dbname=' . DBConfig::$dbConfig['database'], DBConfig::$dbConfig['user'], DBConfig::$dbConfig['pass']);
        };
        return $pimple;
    }
}

