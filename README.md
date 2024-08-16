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
        // Add more directories here if needed
    ]);

return (new PhpCsFixer\Config())
    ->setRules((new KaizenAgency\PhpCsRuleSet\Config\PhpRuleSet())->getRules())
    // ->setRules((new KaizenAgency\PhpCsRuleSet\Config\Php80RuleSet())->getRules()) // Uncomment to use PHP 8.0 rules
    ->setFinder($finder)
    // ->setIndent("  ") // Uncomment to use two spaces instead of four
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());
```

Available rules:
---

- PhpRuleSet
- Php70RuleSet
- Php71RuleSet
- Php72RuleSet
- Php73RuleSet
- Php74RuleSet
- Php80RuleSet
- Php81RuleSet
- Php82RuleSet
- Php83RuleSet
- Php84RuleSet
