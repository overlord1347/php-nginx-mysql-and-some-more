<?php

$config = new \PhpCsFixer\Config();
$config->setRules([
    '@PSR2' => true,
    'align_multiline_comment' => true,
    'array_indentation' => true,
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => true,
    ]);

return $config->setFinder(
    \PhpCsFixer\Finder::create()->exclude('vendor')->in(__DIR__)
);