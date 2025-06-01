<?php

/**
 * Obtém o nome da modalidade
 */
function getModalidadeName($modalidade) {
    $modalidades = [
        'educacao_especial' => 'Educação Especial',
        'fundamental_1' => 'Fundamental I',
        'fundamental_2' => 'Fundamental II',
        'medio_tecnico' => 'Médio/Técnico',
        'superior' => 'Superior'
    ];
    
    return $modalidades[$modalidade] ?? ucfirst(str_replace('_', ' ', $modalidade));
}

/**
 * Obtém a classe CSS correspondente à modalidade
 */
function getCssClassFromModalidade($modalidade) {
    $classes = [
        'educacao_especial' => 'badge-warning',
        'fundamental_1' => 'badge-success',
        'fundamental_2' => 'badge-primary',
        'medio_tecnico' => 'badge-info',
        'superior' => 'badge-danger'
    ];
    
    return $classes[$modalidade] ?? 'badge-secondary';
}

function getModalidadeNome($modalidade) {
    return getModalidadeName($modalidade);
}