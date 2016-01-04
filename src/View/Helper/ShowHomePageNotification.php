<?php

namespace App\View\Helper;


use Zend\View\Helper\AbstractHelper;

class ShowHomePageNotification extends AbstractHelper
{

    public function __invoke()
    {
        if (empty($_COOKIE['homepage_notification'])) {
            setcookie("homepage_notification", true, time()+3600*720);
            return true;
        }

        return false;
    }

}