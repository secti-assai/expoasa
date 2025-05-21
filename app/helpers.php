<?php

if (!function_exists('getModalidadeNome')) {
    /**
     * Retorna o nome formatado da modalidade
     */
    function getModalidadeNome($modalidade) {
        $modalidades = [
            'educacao_especial' => 'Educação Especial',
            'fundamental_1' => 'Fundamental I',
            'fundamental_2' => 'Fundamental II',
            'medio_tecnico' => 'Médio/Técnico',
            'superior' => 'Superior',
        ];
        
        return $modalidades[$modalidade] ?? ucfirst(str_replace('_', ' ', $modalidade));
    }
}