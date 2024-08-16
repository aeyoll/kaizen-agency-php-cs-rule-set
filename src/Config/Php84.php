<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php84Ruleset extends Php83Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP84Migration' => true,
        ]);
    }
}
