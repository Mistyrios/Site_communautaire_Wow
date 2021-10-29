<?php

namespace ContainerVRaLvqL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q70V0qService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q_70V0q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q_70V0q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArticleController::delete' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\ArticleController::edit' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\ArticleController::index' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ContactMessageController::delete' => ['privates', '.service_locator.n5b1g05', 'get_ServiceLocator_N5b1g05Service', true],
            'App\\Controller\\ContactMessageController::index' => ['privates', '.service_locator.zCeWfwA', 'get_ServiceLocator_ZCeWfwAService', true],
            'App\\Controller\\ContactMessageController::show' => ['privates', '.service_locator.n5b1g05', 'get_ServiceLocator_N5b1g05Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\SearchController::handleSearch' => ['privates', '.service_locator.TVSQfmI', 'get_ServiceLocator_TVSQfmIService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\TagController::delete' => ['privates', '.service_locator.S92MJGp', 'get_ServiceLocator_S92MJGpService', true],
            'App\\Controller\\TagController::edit' => ['privates', '.service_locator.S92MJGp', 'get_ServiceLocator_S92MJGpService', true],
            'App\\Controller\\TagController::index' => ['privates', '.service_locator.GPFs8Fj', 'get_ServiceLocator_GPFs8FjService', true],
            'App\\Controller\\TagController::show' => ['privates', '.service_locator.S92MJGp', 'get_ServiceLocator_S92MJGpService', true],
            'App\\Controller\\TypeController::delete' => ['privates', '.service_locator.nPDPjBa', 'get_ServiceLocator_NPDPjBaService', true],
            'App\\Controller\\TypeController::edit' => ['privates', '.service_locator.nPDPjBa', 'get_ServiceLocator_NPDPjBaService', true],
            'App\\Controller\\TypeController::index' => ['privates', '.service_locator.Ue7eLHF', 'get_ServiceLocator_Ue7eLHFService', true],
            'App\\Controller\\TypeController::show' => ['privates', '.service_locator.nPDPjBa', 'get_ServiceLocator_NPDPjBaService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.uzf8IEO', 'get_ServiceLocator_Uzf8IEOService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\VideoController::delete' => ['privates', '.service_locator.Kdg6TWc', 'get_ServiceLocator_Kdg6TWcService', true],
            'App\\Controller\\VideoController::edit' => ['privates', '.service_locator.Kdg6TWc', 'get_ServiceLocator_Kdg6TWcService', true],
            'App\\Controller\\VideoController::index' => ['privates', '.service_locator.H7yroC7', 'get_ServiceLocator_H7yroC7Service', true],
            'App\\Controller\\VideoController::show' => ['privates', '.service_locator.Kdg6TWc', 'get_ServiceLocator_Kdg6TWcService', true],
            'App\\Controller\\WowFrontController::article' => ['privates', '.service_locator.ddtGBuI', 'get_ServiceLocator_DdtGBuIService', true],
            'App\\Controller\\WowFrontController::funnystuff' => ['privates', '.service_locator.lc39rgZ', 'get_ServiceLocator_Lc39rgZService', true],
            'App\\Controller\\WowFrontController::guides' => ['privates', '.service_locator.yBmR6qX', 'get_ServiceLocator_YBmR6qXService', true],
            'App\\Controller\\WowFrontController::histoire' => ['privates', '.service_locator.yBmR6qX', 'get_ServiceLocator_YBmR6qXService', true],
            'App\\Controller\\WowFrontController::news' => ['privates', '.service_locator.yBmR6qX', 'get_ServiceLocator_YBmR6qXService', true],
            'App\\Controller\\WowFrontController::showArticle' => ['privates', '.service_locator.ddtGBuI', 'get_ServiceLocator_DdtGBuIService', true],
            'App\\Controller\\WowFrontController::showVideo' => ['privates', '.service_locator.DGOs1m.', 'get_ServiceLocator_DGOs1m_Service', true],
            'App\\Controller\\WowFrontController::tutoriels' => ['privates', '.service_locator.lc39rgZ', 'get_ServiceLocator_Lc39rgZService', true],
            'App\\Controller\\WowFrontController::video' => ['privates', '.service_locator.DGOs1m.', 'get_ServiceLocator_DGOs1m_Service', true],
            'App\\Controller\\WowFrontController::worldrecord' => ['privates', '.service_locator.lc39rgZ', 'get_ServiceLocator_Lc39rgZService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ArticleController:delete' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\ArticleController:edit' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\ArticleController:index' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ContactMessageController:delete' => ['privates', '.service_locator.n5b1g05', 'get_ServiceLocator_N5b1g05Service', true],
            'App\\Controller\\ContactMessageController:index' => ['privates', '.service_locator.zCeWfwA', 'get_ServiceLocator_ZCeWfwAService', true],
            'App\\Controller\\ContactMessageController:show' => ['privates', '.service_locator.n5b1g05', 'get_ServiceLocator_N5b1g05Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\SearchController:handleSearch' => ['privates', '.service_locator.TVSQfmI', 'get_ServiceLocator_TVSQfmIService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\TagController:delete' => ['privates', '.service_locator.S92MJGp', 'get_ServiceLocator_S92MJGpService', true],
            'App\\Controller\\TagController:edit' => ['privates', '.service_locator.S92MJGp', 'get_ServiceLocator_S92MJGpService', true],
            'App\\Controller\\TagController:index' => ['privates', '.service_locator.GPFs8Fj', 'get_ServiceLocator_GPFs8FjService', true],
            'App\\Controller\\TagController:show' => ['privates', '.service_locator.S92MJGp', 'get_ServiceLocator_S92MJGpService', true],
            'App\\Controller\\TypeController:delete' => ['privates', '.service_locator.nPDPjBa', 'get_ServiceLocator_NPDPjBaService', true],
            'App\\Controller\\TypeController:edit' => ['privates', '.service_locator.nPDPjBa', 'get_ServiceLocator_NPDPjBaService', true],
            'App\\Controller\\TypeController:index' => ['privates', '.service_locator.Ue7eLHF', 'get_ServiceLocator_Ue7eLHFService', true],
            'App\\Controller\\TypeController:show' => ['privates', '.service_locator.nPDPjBa', 'get_ServiceLocator_NPDPjBaService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.uzf8IEO', 'get_ServiceLocator_Uzf8IEOService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\VideoController:delete' => ['privates', '.service_locator.Kdg6TWc', 'get_ServiceLocator_Kdg6TWcService', true],
            'App\\Controller\\VideoController:edit' => ['privates', '.service_locator.Kdg6TWc', 'get_ServiceLocator_Kdg6TWcService', true],
            'App\\Controller\\VideoController:index' => ['privates', '.service_locator.H7yroC7', 'get_ServiceLocator_H7yroC7Service', true],
            'App\\Controller\\VideoController:show' => ['privates', '.service_locator.Kdg6TWc', 'get_ServiceLocator_Kdg6TWcService', true],
            'App\\Controller\\WowFrontController:article' => ['privates', '.service_locator.ddtGBuI', 'get_ServiceLocator_DdtGBuIService', true],
            'App\\Controller\\WowFrontController:funnystuff' => ['privates', '.service_locator.lc39rgZ', 'get_ServiceLocator_Lc39rgZService', true],
            'App\\Controller\\WowFrontController:guides' => ['privates', '.service_locator.yBmR6qX', 'get_ServiceLocator_YBmR6qXService', true],
            'App\\Controller\\WowFrontController:histoire' => ['privates', '.service_locator.yBmR6qX', 'get_ServiceLocator_YBmR6qXService', true],
            'App\\Controller\\WowFrontController:news' => ['privates', '.service_locator.yBmR6qX', 'get_ServiceLocator_YBmR6qXService', true],
            'App\\Controller\\WowFrontController:showArticle' => ['privates', '.service_locator.ddtGBuI', 'get_ServiceLocator_DdtGBuIService', true],
            'App\\Controller\\WowFrontController:showVideo' => ['privates', '.service_locator.DGOs1m.', 'get_ServiceLocator_DGOs1m_Service', true],
            'App\\Controller\\WowFrontController:tutoriels' => ['privates', '.service_locator.lc39rgZ', 'get_ServiceLocator_Lc39rgZService', true],
            'App\\Controller\\WowFrontController:video' => ['privates', '.service_locator.DGOs1m.', 'get_ServiceLocator_DGOs1m_Service', true],
            'App\\Controller\\WowFrontController:worldrecord' => ['privates', '.service_locator.lc39rgZ', 'get_ServiceLocator_Lc39rgZService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ArticleController::delete' => '?',
            'App\\Controller\\ArticleController::edit' => '?',
            'App\\Controller\\ArticleController::index' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\ContactMessageController::delete' => '?',
            'App\\Controller\\ContactMessageController::index' => '?',
            'App\\Controller\\ContactMessageController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SearchController::handleSearch' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TagController::delete' => '?',
            'App\\Controller\\TagController::edit' => '?',
            'App\\Controller\\TagController::index' => '?',
            'App\\Controller\\TagController::show' => '?',
            'App\\Controller\\TypeController::delete' => '?',
            'App\\Controller\\TypeController::edit' => '?',
            'App\\Controller\\TypeController::index' => '?',
            'App\\Controller\\TypeController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\VideoController::delete' => '?',
            'App\\Controller\\VideoController::edit' => '?',
            'App\\Controller\\VideoController::index' => '?',
            'App\\Controller\\VideoController::show' => '?',
            'App\\Controller\\WowFrontController::article' => '?',
            'App\\Controller\\WowFrontController::funnystuff' => '?',
            'App\\Controller\\WowFrontController::guides' => '?',
            'App\\Controller\\WowFrontController::histoire' => '?',
            'App\\Controller\\WowFrontController::news' => '?',
            'App\\Controller\\WowFrontController::showArticle' => '?',
            'App\\Controller\\WowFrontController::showVideo' => '?',
            'App\\Controller\\WowFrontController::tutoriels' => '?',
            'App\\Controller\\WowFrontController::video' => '?',
            'App\\Controller\\WowFrontController::worldrecord' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ArticleController:delete' => '?',
            'App\\Controller\\ArticleController:edit' => '?',
            'App\\Controller\\ArticleController:index' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\ContactMessageController:delete' => '?',
            'App\\Controller\\ContactMessageController:index' => '?',
            'App\\Controller\\ContactMessageController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SearchController:handleSearch' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TagController:delete' => '?',
            'App\\Controller\\TagController:edit' => '?',
            'App\\Controller\\TagController:index' => '?',
            'App\\Controller\\TagController:show' => '?',
            'App\\Controller\\TypeController:delete' => '?',
            'App\\Controller\\TypeController:edit' => '?',
            'App\\Controller\\TypeController:index' => '?',
            'App\\Controller\\TypeController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\VideoController:delete' => '?',
            'App\\Controller\\VideoController:edit' => '?',
            'App\\Controller\\VideoController:index' => '?',
            'App\\Controller\\VideoController:show' => '?',
            'App\\Controller\\WowFrontController:article' => '?',
            'App\\Controller\\WowFrontController:funnystuff' => '?',
            'App\\Controller\\WowFrontController:guides' => '?',
            'App\\Controller\\WowFrontController:histoire' => '?',
            'App\\Controller\\WowFrontController:news' => '?',
            'App\\Controller\\WowFrontController:showArticle' => '?',
            'App\\Controller\\WowFrontController:showVideo' => '?',
            'App\\Controller\\WowFrontController:tutoriels' => '?',
            'App\\Controller\\WowFrontController:video' => '?',
            'App\\Controller\\WowFrontController:worldrecord' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
