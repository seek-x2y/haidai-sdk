<?php
namespace Seek\HaidaiSDK;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['api'] = function(){

        };

        $container[''] = function (){

        };
    }
}