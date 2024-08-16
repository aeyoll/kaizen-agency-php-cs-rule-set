<?php

namespace KaizenAgency\PhpCsRuleSet\Config;

use PhpCsFixer\RuleSet\AbstractRuleSetDescription;

class PhpRuleSet extends AbstractRuleSetDescription
{
    public function getRules(): array
    {
        return [
            '@PSR12' => true,
            'array_syntax' => ['syntax' => 'short'],
            'array_indentation' => true,
            'binary_operator_spaces' => true,
            'single_line_after_imports' => true,
            'blank_line_before_statement' => ['statements' => ['return']],
            'cast_spaces' => true,
            'concat_space' => ['spacing' => 'one'],
            'no_singleline_whitespace_before_semicolons' => true,
            'not_operator_with_successor_space' => false,
            'no_unused_imports' => true,
            'phpdoc_align' => false,
            'phpdoc_indent' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => true,
            'phpdoc_no_package' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_summary' => true,
            'phpdoc_to_comment' => true,
            'phpdoc_trim' => true,
            'single_blank_line_at_eof' => true,
            'ternary_operator_spaces' => true,
            'ordered_imports' => [
                'sort_algorithm' => 'alpha',
                'imports_order' => ['const', 'class', 'function'],
            ],
            'no_extra_blank_lines' => true,
            'no_whitespace_in_blank_line' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'whitespace_after_comma_in_array' => true,
        ];
    }

    public function getDescription(): string
    {
        return 'Rules that follow `PSR-12 <https://www.php-fig.org/psr/psr-12/>`_ standard.';
    }
}
