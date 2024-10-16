<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude([
        'vendor',
        'tests',
    ]);

return (new PhpCsFixer\Config())
    ->setRules((new KaizenAgency\PhpCsRuleSet\Config\PhpRuleSet())->getRules())
    ->setFinder($finder)
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());

