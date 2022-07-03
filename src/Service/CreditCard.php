<?php

namespace Jawak\DokuLaravel\Service;

use Jawak\DokuLaravel\Common\PaycodeGenerator;

class CreditCard
{
    public function generate($params)
    {
        $params['targetPath'] = '/credit-card/v1/payment-page';
        return PaycodeGenerator::post($params);
    }
}
