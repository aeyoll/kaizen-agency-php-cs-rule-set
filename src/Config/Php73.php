<?php

namespace KaizenAgency\PhpCsRuleSet;

class Php73Ruleset extends Php72Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP73Migration' => true,
        ]);
    }
}
