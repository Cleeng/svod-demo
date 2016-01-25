<?php

namespace App\Action;

use Cleeng_Api;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class PremiumContentFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new PremiumContentAction(
            $container->get(RouterInterface::class),
            $container->get(TemplateRendererInterface::class),
            new Cleeng_Api()
        );
    }
}
