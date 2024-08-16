<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php82Ruleset extends Php81Ruleset
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP82Migration' => true,
        ]);
    }
}
