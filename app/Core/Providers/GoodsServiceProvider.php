<?php

namespace App\Core\Providers;

use App\Model\Goods;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class GoodsServiceProvider
 * @package App\Core\Providers
 */
class GoodsServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['App\Models\Goods'] = function ($c) {
            return new Goods();
        };
        return $pimple;
    }
}

