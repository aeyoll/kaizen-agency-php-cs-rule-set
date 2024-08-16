<?php

namespace KaizenAgency\PhpCsRuleSet;

class Php70Ruleset extends PhpRuleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP70Migration' => true,
        ]);
    }
}
