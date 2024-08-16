<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php84RuleSet extends Php83RuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP84Migration' => true,
        ]);
    }
}
