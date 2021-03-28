<?php

namespace App\Core\Providers;

use App\Model\Reviews;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ReviewsServiceProvider
 * @package App\Core\Providers
 */
class ReviewsServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['App\Models\Reviews'] = function ($c) {
            return new Reviews();
        };
        return $pimple;
    }
}
