<?php

namespace Jawak\DokuLaravel\Service;

use Jawak\DokuLaravel\Common\PaycodeGenerator;

class EMoney
{
    public function doku($params)
    {
        $params['targetPath'] = '/dokuwallet-emoney/v1/payment';
        return PaycodeGenerator::post($params);
    }

    public function ovo($params)
    {
        $params['targetPath'] = '/ovo-emoney/v1/payment';
        return PaycodeGenerator::post($params);
    }

    public function shopeePay($params)
    {
        $params['targetPath'] = '/shopeepay-emoney/v2/order';
        return PaycodeGenerator::post($params);
    }
}
