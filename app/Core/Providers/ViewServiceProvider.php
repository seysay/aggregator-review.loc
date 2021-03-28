<?php

namespace App\Core\Providers;

use App\Core\View;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * This class has method that returns service
 * Class ViewServiceProvider
 * @package App\Core\Providers
 */
class ViewServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {

        $pimple['App\Core\View'] = function ($c) {
            return new View(new Environment(new FilesystemLoader('/var/www/aggregator-review.loc/app/Views')));
        };
        return $pimple;
    }
}

