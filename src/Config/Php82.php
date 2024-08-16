<?php

namespace KaizenAgency\PhpCsRuleSet;

class Php82Ruleset extends Php81Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP82Migration' => true,
        ]);
    }
}
