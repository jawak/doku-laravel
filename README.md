# Doku Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jawak/doku-laravel.svg?style=flat-square)](https://packagist.org/packages/jawak/doku-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/jawak/doku-laravel.svg?style=flat-square)](https://packagist.org/packages/jawak/doku-laravel)
![GitHub Actions](https://github.com/jawak/doku-laravel/actions/workflows/main.yml/badge.svg)

Unofficial Laravel library for jokul(doku)

## Installation

You can install the package via composer:

```bash
composer require jawak/doku-laravel
```

## Usage

```php
php artisan vendor:publish --provider="Jawak\DokuLaravel\DokuLaravelServiceProvider" --tag="config"
```

## Env
```bash
DOKU_PRODUCTION=
DOKU_SECRET_KEY=""
DOKU_CLIENT_ID=""
```
## Payment Channels Supported

- Virtual Account
  - Bank BCA VA
  - Bank Mandiri VA
  - Bank Syariah Indonesia VA
  - DOKU VA
  - Bank Danamon VA
  - Bank BNI VA
  - Bank CIMB VA
  - Bank Permata VA
  
- Credit Card
- Emoney
  - Doku
  - Ovo
  - Shopee Pay
- Gerai
  - Alamart
  - Indomart


## Virtual Account
```php
$params = [
    "order" => [
        "invoice_number" => 'INV002',
        'amount' => 100000
    ],
    "virtual_account_info" => [
        "expired_time" => 1440,
        "reusable_status" => false,
    ],
    "customer" => [
        "name" => 'lorem ipsum',
        "email" => 'email@example.com'
    ]
];
```
For further details of each parameter, please refer to our [Jokul Docs](https://jokul.doku.com/docs/docs/jokul-direct/virtual-account/virtual-account-overview).

## Virtual Account
```php
use Jawak\DokuLaravel\Facades\Doku;

Doku::VA()->bri($params);
Doku::VA()->mandiri($params);
Doku::VA()->bsi($params);
Doku::VA()->bni($params);
Doku::VA()->doku($params);
Doku::VA()->danamon($params);
Doku::VA()->bca($params);
Doku::VA()->cimb($params);
Doku::VA()->permata($params);
```
## Credit Card
```php
Doku::CC()->generate($params);
```

## E-money
```php
Doku::EMoney()->doku($params);
Doku::EMoney()->ovo($params);
Doku::EMoney()->shopeePay($params);
```

## Gerai
```php
Doku::Gerai()->alfa($params);
Doku::Gerai()->indomaret($params);
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

-   [Riki Handoyo](https://github.com/jawak)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
