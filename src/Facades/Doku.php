<?php

namespace Jawak\DokuLaravel\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Jawak\DokuLaravel\Service\VirtualAccount VA()
 * @method static \Jawak\DokuLaravel\Service\CreditCard CC()
 */
class Doku extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'doku';
    }
}
