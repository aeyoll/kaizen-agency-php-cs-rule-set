<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php81RuleSet extends Php80RuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP81Migration' => true,
        ]);
    }
}
