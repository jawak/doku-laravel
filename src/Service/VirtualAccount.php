<?php
namespace Jawak\DokuLaravel\Service;

use Jawak\DokuLaravel\Common\PaycodeGenerator;

class VirtualAccount
{
    /***
     * @param $params
     * @return \Illuminate\Support\Collection
     */
    public function danamon($params)
    {
        $params['targetPath'] = '/danamon-virtual-account/v2/payment-code';
        return PaycodeGenerator::post($params);
    }

    public function bca($params)
    {
        $params['targetPath'] = '/bca-virtual-account/v2/payment-code';
        return PaycodeGenerator::post($params);
    }

    /***
     * @param $params
     * @return \Illuminate\Support\Collection
     */
    public function mandiri($params)
    {
        $params['targetPath'] = '/mandiri-virtual-account/v2/payment-code';
        return PaycodeGenerator::post($params);
    }

    /***
     * @param $params
     * @return \Illuminate\Support\Collection
     */
    public function bni($params)
    {
        $params['targetPath'] = '/bni-virtual-account/v2/payment-code';
        return PaycodeGenerator::post($params);
    }

    /***
     * @param $params
     * @return \Illuminate\Support\Collection
     */
    public function bri($params)
    {
        $params['targetPath'] = '/bri-virtual-account/v2/payment-code';
        return PaycodeGenerator::post($params);
    }

    /***
     * @param $params
     * @return \Illuminate\Support\Collection
     */
    public function bsi($params)
    {
        $params['targetPath'] = '/bsm-virtual-account/v2/payment-code';
        return PaycodeGenerator::post($params);
    }

    /***
     * @param $params
     * @return \Illuminate\Support\Collection
     */
    public function cimb($params)
    {
        $params['targetPath'] = '/cimb-virtual-account/v2/payment-code';
        return PaycodeGenerator::post($params);
    }

    /***
     * @param $params
     * @return \Illuminate\Support\Collection
     */
    public function doku($params)
    {
        $params['targetPath'] = "/doku-virtual-account/v2/payment-code";
        return PaycodeGenerator::post($params);
    }

    /***
     * @param $params
     * @return \Illuminate\Support\Collection
     */
    public function permata($params)
    {
        $params['targetPath'] = '/permata-virtual-account/v2/payment-code';
        return PaycodeGenerator::post($params);
    }

}
