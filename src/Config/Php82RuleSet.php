<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php82RuleSet extends Php81RuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP82Migration' => true,
        ]);
    }
}
