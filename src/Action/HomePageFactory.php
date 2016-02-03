<?php

namespace App\Action;

use Cleeng_Api;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class HomePageFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $router   = $container->get(RouterInterface::class);
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;
        $cleengApi = new Cleeng_Api();
        $cleengApi->enableSandbox();

        return new HomePageAction($router, $template, $cleengApi);
    }
}
