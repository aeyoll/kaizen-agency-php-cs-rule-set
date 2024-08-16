<?php

namespace KaizenAgency\PhpCsRuleSet;

class Php83Ruleset extends Php82Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP83Migration' => true,
        ]);
    }
}
