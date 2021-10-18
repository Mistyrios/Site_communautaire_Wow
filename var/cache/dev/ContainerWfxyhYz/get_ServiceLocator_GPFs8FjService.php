<?php

namespace ContainerWfxyhYz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GPFs8FjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GPFs8Fj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GPFs8Fj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tagRepository' => ['privates', 'App\\Repository\\TagRepository', 'getTagRepositoryService', true],
        ], [
            'tagRepository' => 'App\\Repository\\TagRepository',
        ]);
    }
}
