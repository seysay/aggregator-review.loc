<?php

namespace App\Core\Providers;

use App\Controller\GoodsController;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**This class has method that returns service
 *
 * Class StudentControllerServiceProvider
 * @package App\Core\Providers
 */
class StudentControllerServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['App\Controllers\GoodsController'] = function ($c) {
            return new GoodsController($c['App\Models\Goods'], $c['App\Core\View']);
        };
        return $pimple;
    }
}

