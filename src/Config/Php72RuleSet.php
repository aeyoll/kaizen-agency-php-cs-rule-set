<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php72RuleSet extends Php71RuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP72Migration' => true,
        ]);
    }
}
