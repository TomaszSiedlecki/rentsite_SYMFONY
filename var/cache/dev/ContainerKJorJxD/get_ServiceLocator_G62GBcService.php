<?php

namespace ContainerKJorJxD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G62GBcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G62_GBc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G62_GBc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'crepos' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'repos' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'srepos' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.G62_GBc.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.G62_GBc": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'crepos' => 'App\\Repository\\CategoryRepository',
            'repos' => 'App\\Repository\\ProductRepository',
            'srepos' => 'App\\Repository\\StockRepository',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}