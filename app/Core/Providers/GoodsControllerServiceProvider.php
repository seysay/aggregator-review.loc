<?php

namespace App\Core\Providers;

use App\Controller\GoodsController;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class GoodsControllerServiceProvider
 * @package App\Core\Providers
 */
class GoodsControllerServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['App\Controllers\GoodsController'] = function ($c) {
            return new GoodsController($c['App\Models\Goods'], $c['App\Models\Reviews'], $c['App\Core\View']);
        };
        return $pimple;
    }
}
