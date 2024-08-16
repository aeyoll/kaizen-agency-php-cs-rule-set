<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php70RuleSet extends PhpRuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP70Migration' => true,
        ]);
    }
}
