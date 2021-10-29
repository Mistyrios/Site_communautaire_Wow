<?php

namespace ContainerVRaLvqL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H7yroC7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H7yroC7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H7yroC7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'videoRepository' => ['privates', 'App\\Repository\\VideoRepository', 'getVideoRepositoryService', true],
        ], [
            'videoRepository' => 'App\\Repository\\VideoRepository',
        ]);
    }
}
