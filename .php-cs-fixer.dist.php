<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in([
        __DIR__ . '/drush',
        __DIR__ . '/web/modules/custom',
        __DIR__ . '/web/sites',
        __DIR__ . '/web/themes/custom',
        __DIR__ . '/tests',
    ])
    ->exclude(['files', 'simpletest'])
    ->name('*.php')
    ->name('*.module')
    ->name('*.theme');

$config = new Config();

$config->setRules([
    '@Symfony' => true,
    '@Symfony:risky' => true,
    'array_syntax' => ['syntax' => 'short'],
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'concat_space' => ['spacing' => 'one'],
    'header_comment' => ['header' => "\n"],
    'declare_strict_types' => true,
    'no_extra_blank_lines' => true,
    'no_php4_constructor' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'ordered_class_elements' => true,
    'ordered_imports' => true,
    'phpdoc_align' => ['align' => 'left'],
    'phpdoc_line_span' => [
        'const' => 'single',
        'property' => 'single',
        'method' => 'single',
    ],
    'phpdoc_order' => true,
    'compact_nullable_typehint' => true,
    'void_return' => false,
    'strict_comparison' => true,
    'strict_param' => true,
    'php_unit_strict' => true,
    'php_unit_test_annotation' => ['style' => 'annotation'],
])
->setRiskyAllowed(true)
->setFinder($finder);

return $config;
