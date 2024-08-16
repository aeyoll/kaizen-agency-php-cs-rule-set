<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php74Ruleset extends Php73Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP74Migration' => true,
        ]);
    }
}
