<?php

namespace ContainerYS2qMxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CategorieType' shared autowired service.
     *
     * @return \App\Form\CategorieType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CategorieType'] = new \App\Form\CategorieType();
    }
}
