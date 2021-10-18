<?php

namespace ContainerWfxyhYz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YBmR6qXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yBmR6qX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yBmR6qX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'repoType' => ['privates', 'App\\Repository\\TypeRepository', 'getTypeRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\ArticleRepository',
            'repoType' => 'App\\Repository\\TypeRepository',
        ]);
    }
}
