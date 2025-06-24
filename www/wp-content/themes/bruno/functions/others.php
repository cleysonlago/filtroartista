<?php

function exibir_menu_alfabetico_artistas() {
    $letras = range('A', 'Z');
    $letras[] = '0-9';
    
    // Obter a letra atual da query string
    $letra_atual = isset($_GET['letra']) ? sanitize_text_field($_GET['letra']) : '';
    
    echo '<div class="menu-alfabetico-artistas">';
    foreach ($letras as $letra) {
        $url = add_query_arg('letra', $letra, remove_query_arg('paged', get_post_type_archive_link('artistas')));
        
        // Adicionar classe 'ativo' para a letra atual
        $classe = ($letra === $letra_atual) ? 'class="ativo"' : '';
        
        echo '<a href="' . esc_url($url) . '" ' . $classe . '>' . esc_html($letra) . '</a> ';
    }
    echo '</div>';
}

// Adicionar suporte para a variável 'paged' na query
function adicionar_query_vars($vars) {
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'adicionar_query_vars');