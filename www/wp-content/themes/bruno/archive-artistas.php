<?php

get_header();

exibir_menu_alfabetico_artistas();

$letra_filtro = isset($_GET['letra']) ? sanitize_text_field($_GET['letra']) : '';

$args = array(
    'post_type' => 'artistas',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
);

if (!empty($letra_filtro)) {
    // Se for intervalo numérico
    if ($letra_filtro === '0-9') {
        $args['title_starts_with'] = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    } else {
        $args['title_starts_with'] = $letra_filtro;
    }
}

// Filtro personalizado para título que começa com
function title_starts_with_filter($where, $wp_query) {
    global $wpdb;
    
    if ($starts_with = $wp_query->get('title_starts_with')) {
        if (is_array($starts_with)) {
            $where .= " AND ($wpdb->posts.post_title REGEXP '^[";
            $where .= implode('', $starts_with);
            $where .= "]')";
        } else {
            $where .= " AND ($wpdb->posts.post_title LIKE '" . esc_sql($wp_query->get('title_starts_with')) . "%')";
        }
    }
    return $where;
}
add_filter('posts_where', 'title_starts_with_filter', 10, 2);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $nome = get_field('nome');
        $descricao = get_field('descricao');
        echo '<div class="artista">';
        echo '<h2>' . esc_html($nome) . '</h2>';
        echo '<p>' . esc_html($descricao) . '</p>';
        echo '<a href="' . get_permalink() . '">Ver detalhes</a>';
        echo '</div>';
        
    }
} else {
    echo '<p>Nenhum artistas encontrado.</p>';
}

wp_reset_postdata();

get_footer();