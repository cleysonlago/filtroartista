<?php

function exibir_menu_alfabetico_artistas() {
    $letras = range('A', 'Z');
    $letras[] = '0-9';
    
    // Obter a letra atual da query string
    $letra_atual = isset($_GET['letra']) ? sanitize_text_field($_GET['letra']) : '';
    
    echo '<div class="menu-alfabetico" style="text-align: center; display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 10px;">';
    foreach ($letras as $letra) {
        $url = add_query_arg('letra', $letra, remove_query_arg('paged', get_post_type_archive_link('artistas')));
        
        // Adicionar classe 'ativo' para a letra atual
        $classe = ($letra === $letra_atual) ? 'class="ativo"' : '';
        
        echo '<a href="' . esc_url($url) . '" ' . $classe . '>' . esc_html($letra) . '</a> ';
    }
    echo '</div>';
}

function criar_post_menu_artistas() {

	$labels = array(
        'name' => _x('Artistas', 'post type general name'),
        'singular_name' => _x('Artista', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Artista'),
        'add_new_item' => __('Adicionar Novo'),
        'edit_item' => __('Editar'),
        'new_item' => __('Adicionar Novo'),
        'all_items' => __('Todos os Artistas'),
        'view_item' => __('Ver Artistas'),
        'search_items' => __('Pesquisar Artistas'),
        'not_found' =>  __('Não foram encontrados Artistas'),
        'not_found_in_trash' => __('Não foram encontrados Artistas na Lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Artistas'
    );

	register_post_type( 'artistas', array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-archive',
        'rewrite' => array(
            'slug' => 'artistas',
            'with_front' => true,
        ),
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array('title')
        )
    );

}

add_action( 'init', 'criar_post_menu_artistas' );

// Adicionar suporte para a variável 'paged' na query
function adicionar_query_vars($vars) {
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'adicionar_query_vars');