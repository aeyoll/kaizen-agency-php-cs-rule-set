<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php80RuleSet extends Php74RuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP80Migration' => true,
        ]);
    }
}
