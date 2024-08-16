<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php73Ruleset extends Php72Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP73Migration' => true,
        ]);
    }
}
