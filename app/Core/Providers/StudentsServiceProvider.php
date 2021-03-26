<?php

namespace App\Core\Providers;

use App\Model\Goods;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**This class has method that returns service
 *
 * Class StudentsServiceProvider
 * @package App\Core\Providers
 */
class StudentsServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['App\Models\Goods'] = function ($c) {
            return new Goods($c['\PDO']);
        };
        return $pimple;
    }
}

