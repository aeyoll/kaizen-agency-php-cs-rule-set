<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php71RuleSet extends Php70RuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP71Migration' => true,
        ]);
    }
}
