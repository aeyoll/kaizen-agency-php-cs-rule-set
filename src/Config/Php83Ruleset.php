<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php83RuleSet extends Php82RuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP83Migration' => true,
        ]);
    }
}
