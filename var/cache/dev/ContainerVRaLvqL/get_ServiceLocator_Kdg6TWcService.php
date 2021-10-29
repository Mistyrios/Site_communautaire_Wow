<?php

namespace ContainerVRaLvqL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kdg6TWcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Kdg6TWc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Kdg6TWc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'video' => ['privates', '.errored..service_locator.Kdg6TWc.App\\Entity\\Video', NULL, 'Cannot autowire service ".service_locator.Kdg6TWc": it references class "App\\Entity\\Video" but no such service exists.'],
        ], [
            'video' => 'App\\Entity\\Video',
        ]);
    }
}