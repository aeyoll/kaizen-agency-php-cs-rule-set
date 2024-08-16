<?php

namespace KaizenAgency\PhpCsRuleSet;

class Php71Ruleset extends Php70Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP71Migration' => true,
        ]);
    }
}
