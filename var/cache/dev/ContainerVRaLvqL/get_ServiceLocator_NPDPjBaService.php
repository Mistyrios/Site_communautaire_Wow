<?php

namespace ContainerVRaLvqL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NPDPjBaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nPDPjBa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nPDPjBa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'type' => ['privates', '.errored..service_locator.nPDPjBa.App\\Entity\\Type', NULL, 'Cannot autowire service ".service_locator.nPDPjBa": it references class "App\\Entity\\Type" but no such service exists.'],
        ], [
            'type' => 'App\\Entity\\Type',
        ]);
    }
}
