[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/donate?business=SYC5XDT23UZ5G&no_recurring=0&item_name=Thank+you%21&currency_code=EUR)

# Codeigniter Language

[![Build status](https://github.com/daycry/codeigniter-language/actions/workflows/phpunit.yml/badge.svg?branch=main)](https://github.com/daycry/codeigniter-language/actions/workflows/phpunit.yml)
[![Coverage Status](https://coveralls.io/repos/github/daycry/codeigniter-language/badge.svg?branch=main)](https://coveralls.io/github/daycry/codeigniter-language?branch=main)
[![Downloads](https://poser.pugx.org/daycry/codeigniter-language/downloads)](https://packagist.org/packages/daycry/codeigniter-language)
[![GitHub release (latest by date)](https://img.shields.io/github/v/release/daycry/codeigniter-language)](https://packagist.org/packages/daycry/codeigniter-language)
[![GitHub stars](https://img.shields.io/github/stars/daycry/codeigniter-language)](https://packagist.org/packages/daycry/codeigniter-language)
[![GitHub license](https://img.shields.io/github/license/daycry/codeigniter-language)](https://github.com/daycry/codeigniter-language/blob/main/LICENSE)

Language for Codeigniter 4

Send translation files to Javascript

## Installation via composer

Use the package with composer install

	> composer require daycry/codeigniter-language

## Manual installation

Download this repo and then enable it by editing **app/Config/Autoload.php** and adding the **Daycry\Language**
namespace to the **$psr4** array. For example, if you copied it into **app/ThirdParty**:

```php
$psr4 = [
    'Config'      => APPPATH . 'Config',
    APP_NAMESPACE => APPPATH,
    'App'         => APPPATH,
    'Daycry\Language' => APPPATH .'ThirdParty/codeigniter-language/src',
];
```

## Usage Loading Library

```php
$language = new \Daycry\Language\Language( \Config\Services::request()->getLocale() );
$language->loadFile( 'Validation' );

var_dump( $language->getTraductions() );

```

## Usage as a Service

```php
$language = \Config\Services::language();
$language->loadFile( 'Validation' );

var_dump( $language->getTraductions() );

```

# Usage In Views

## Twig

Use the package with composer install

	> composer require daycry/twig

```php
$this->twig->addGlobal( 'traductions', $this->language->getTraductions() );

```

```javascript
<script>
    var traductions = {{ traductions|json_encode|raw }};

    console.log( traductions['File']['string'] );
</script>

```

## Codeigniter Views

```php
echo view( 'some_view' );

```

```php
<script>
    var traductions = <?php echo json_encode( $this->language->getTraductions() ); ?>;

    console.log( traductions['File']['string'] );
</script>

```
