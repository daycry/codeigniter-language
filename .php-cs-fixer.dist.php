<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use CodeIgniter\CodingStandard\CodeIgniter4;
use Nexus\CsConfig\Factory;
use Nexus\CsConfig\Fixer\Comment\NoCodeSeparatorCommentFixer;
use Nexus\CsConfig\FixerGenerator;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->files()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->exclude([
        'Pager/Views',
        'ThirdParty',
        'Validation/Views',
    ]);

$options = [
    'cacheFile' => 'build/.php-cs-fixer.cache',
    'finder'    => $finder,
];

$overrides = [
    'php_unit_data_provider_name' => [
        'prefix' => 'provide',
        'suffix' => '',
    ],
    'php_unit_data_provider_static'      => true,
    'php_unit_data_provider_return_type' => true,
    'no_extra_blank_lines'               => [
        'tokens' => [
            'attribute',
            'break',
            'case',
            'continue',
            'curly_brace_block',
            'default',
            'extra',
            'parenthesis_brace_block',
            'return',
            'square_brace_block',
            'switch',
            'throw',
            'use',
        ],
    ],
];

$config = Factory::create(new CodeIgniter4(), $overrides, $options)->forLibrary(
    'Codeigniter Language',
    'Daycry',
    'daycry9@gmail.com'
);

// @TODO: remove this check when support for PHP 7.4 is dropped
if (PHP_VERSION_ID >= 80000) {
    $config
        ->registerCustomFixers(FixerGenerator::create('vendor/nexusphp/cs-config/src/Fixer', 'Nexus\\CsConfig\\Fixer'))
        ->setRules(array_merge($config->getRules(), [
            NoCodeSeparatorCommentFixer::name() => true,
        ]));
}

return $config;