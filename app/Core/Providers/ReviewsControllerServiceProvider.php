<?php

namespace App\Core\Providers;

use App\Controller\GoodsController;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ReviewsControllerServiceProvider
 * @package App\Core\Providers
 */
class ReviewsControllerServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['App\Controllers\ReviewsController'] = function ($c) {
            return new GoodsController($c['App\Models\Goods'], $c['App\Models\Reviews'], $c['App\Core\View']);
        };
        return $pimple;
    }
}
