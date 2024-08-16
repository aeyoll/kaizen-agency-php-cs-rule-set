<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php74RuleSet extends Php73RuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP74Migration' => true,
        ]);
    }
}
