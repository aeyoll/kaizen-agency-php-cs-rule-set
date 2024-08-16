<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php80Ruleset extends Php74Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP80Migration' => true,
        ]);
    }
}
