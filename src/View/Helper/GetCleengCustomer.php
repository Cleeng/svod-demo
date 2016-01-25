<?php

namespace App\View\Helper;

use Cleeng_Api;
use Exception;
use Zend\View\Helper\AbstractHelper;

class GetCleengCustomer extends AbstractHelper
{
    public function __invoke()
    {
        $cleengApi = new Cleeng_Api();

        try {
            return $cleengApi->getCustomer();
        } catch(Exception $e) {
            return null;
        }

    }
}
