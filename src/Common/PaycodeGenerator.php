<?php

namespace Jawak\DokuLaravel\Common;

use Illuminate\Support\Facades\Http;
use Jawak\DokuLaravel\Common\Config;

use Jawak\DokuLaravel\Common\Utils;
use Jawak\DokuLaravel\Doku;

class PaycodeGenerator
{

    public static function post($params)
    {
        $config = Doku::getConfig();
        $header = [];
        $requestId = rand(1, 100000);
        $dateTime = gmdate("Y-m-d H:i:s");
        $dateTime = date(DATE_ISO8601, strtotime($dateTime));
        $dateTimeFinal = substr($dateTime, 0, 19) . "Z";

        $getUrl = Config::getBaseUrl($config['environment']);

        $targetPath = $params['targetPath'];
        $url = $getUrl . $targetPath;
        unset($params['targetPath']);
        $data = $params;

        $header['Client-Id'] = $config['client_id'];
        $header['Request-Id'] = $requestId;
        $header['Request-Timestamp'] = $dateTimeFinal;
        $signature = Utils::generateSignature($header, $targetPath, json_encode($data), $config['shared_key']);
        $headers = [
            'Content-Type' => 'application/json',
            'Signature' => $signature,
            'Request-Id' =>  $requestId,
            'Client-Id' =>  $config['client_id'],
            'Request-Timestamp' => $dateTimeFinal,
            'Request-Target' => $targetPath,

        ];

        $resp = Http::withHeaders($headers)->post($url, $data);
        return $resp->collect();
    }
}
