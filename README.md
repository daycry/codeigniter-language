# Doctrine

Language for Codeigniter 4

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