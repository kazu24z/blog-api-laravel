<?php

$rules = [
    '@PhpCsFixer' => true,
    'is_null' => true, //risky
    'list_syntax' => ['syntax' => 'short'],
    'mb_str_functions' => true, // risky
    'modernize_types_casting' => true, // risky
    'no_php4_constructor' => true, // risky
    'no_superfluous_phpdoc_tags' => false,
    'non_printable_character' => true, // risky
    'random_api_migration' => true, // risky
    'self_accessor' => true, // risky
    'strict_comparison' => true, // risky
    'strict_param' => true, // risky
    'ternary_to_null_coalescing' => true,
    'php_unit_test_class_requires_covers' => false,
    'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
];

$finder = PhpCsFixer\Finder::create()
    ->exclude([
        'bootstrap/cache',
        'public',
        'resources',
        'storage',
        'vendor',
    ])
    ->notPath([
        'artisan',
        'server.php',
        '.php_cs-fixer.dist.php',
        '.phpstorm.meta.php',
        '_ide_helper.php',
        '_ide_helper_models.php',
    ])
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder($finder)
;
