<?php

namespace ContainerLxABjxb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zk9m7yyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Zk9m7yy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Zk9m7yy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'personne' => ['privates', '.errored..service_locator.Zk9m7yy.App\\Entity\\Personne', NULL, 'Cannot autowire service ".service_locator.Zk9m7yy": it references class "App\\Entity\\Personne" but no such service exists.'],
        ], [
            'em' => '?',
            'personne' => 'App\\Entity\\Personne',
        ]);
    }
}
