<?php

namespace Jawak\DokuLaravel;

use Jawak\DokuLaravel\Service\CreditCard;
use Jawak\DokuLaravel\Service\EMoney;
use Jawak\DokuLaravel\Service\Gerai;
use Jawak\DokuLaravel\Service\VirtualAccount;

class Doku
{
    public static function getConfig(): array
    {
        return [
            'environment' => config('doku-laravel.environment'),
            'client_id' => config('doku-laravel.client_id'),
            'shared_key' => config('doku-laravel.shared_key'),
        ];
    }

    public function VA(): VirtualAccount
    {
        return new VirtualAccount();
    }

    public function CC(): CreditCard
    {
        return new CreditCard();
    }

    public function Gerai(): Gerai
    {
        return new Gerai();
    }

    public function EMoney(): EMoney
    {
        return new EMoney();
    }
}
