<?php

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