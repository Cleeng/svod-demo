<?php

namespace App\Action;

use Cleeng_Api;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\RedirectResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Expressive\ZendView\ZendViewRenderer;
use Zend\View\Model\ViewModel;

class PremiumContentAction
{
    private $router;

    private $template;

    public function __construct(
        Router\RouterInterface $router,
        Template\TemplateRendererInterface $template,
        Cleeng_Api $cleengApi
    ) {
        $this->router   = $router;
        $this->template = $template;
        $this->cleengApi = $cleengApi;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        if (!$this->cleengApi->isAccessGranted('A764667811_NL')) {
            return new RedirectResponse('/');
        }

        $data = [
            'layout' => 'layout::premium-content',
        ];

        return new HtmlResponse($this->template->render('app::premium-content', $data));
    }
}
