<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php72Ruleset extends Php71Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP72Migration' => true,
        ]);
    }
}
