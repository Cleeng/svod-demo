<?php

namespace App\Action;

use Cleeng_Api;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class AuthenticateFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $router   = $container->get(RouterInterface::class);
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;
        $cleengApi = new Cleeng_Api();

        return new AuthenticateAction($router, $template, $cleengApi);
    }
}
