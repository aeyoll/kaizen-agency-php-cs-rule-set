<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

class Php73RuleSet extends Php72RuleSet
{
    public function getRules(): array
    {
        return array_merge(parent::getRules(), [
            '@PHP73Migration' => true,
        ]);
    }
}
