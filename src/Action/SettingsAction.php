<?php

namespace App\Action;

use Cleeng_Api;
use Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\RedirectResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;

class SettingsAction
{
    private $router;

    private $template;

    public function __construct(Router\RouterInterface $router, Template\TemplateRendererInterface $template = null, Cleeng_Api $cleengApi)
    {
        $this->router   = $router;
        $this->template = $template;
        $this->cleengApi = $cleengApi;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        if (!$this->cleengApi->isAccessGranted('A764667811_NL')) {
            return new RedirectResponse('/');
        }

        $params = $request->getQueryParams();

        $data = [
            'layout' => 'layout::authenticate',
            'mode' => !empty($params['mode']) ? $params['mode'] : 'profile'
        ];

        return new HtmlResponse($this->template->render('app::settings', $data));
    }
}
