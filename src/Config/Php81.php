<?php

namespace KaizenAgency\PhpCsRuleSet;

class Php81Ruleset extends Php80Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP81Migration' => true,
        ]);
    }
}
