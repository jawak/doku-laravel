<?php

namespace Jawak\DokuLaravel\Service;

use Jawak\DokuLaravel\Common\PaycodeGenerator;

class Gerai
{
    public function alfa($params)
    {
        $params['targetPath'] = '/alfa-virtual-account/v2/payment-code';
        return PaycodeGenerator::post($params);
    }

    public function indomaret($params)
    {
        $params['targetPath'] = '/indomaret-online-to-offline/v2/payment-code';
        return PaycodeGenerator::post($params);
    }
}
