# Kaizen Agency PHP CS Rule Sets

Installation:
---

```bash
composer require kaizen-agency/php-cs-rule-set
```

Configuration:
---

In `.php-cs-fixer.dist.php`:

```php
<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude([
        'vendor',
        'tests',
    ]);

return (new PhpCsFixer\Config())
    ->setRules((new KaizenAgency\PhpCsRuleSet\Config\Php())->getRules())
    ->setFinder($finder)
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());
