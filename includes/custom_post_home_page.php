<?php

registrar_home_page();

function registrar_home_page() {

    $descritivos = array(
        'name' => 'home_page',
        'singular_name' => 'home-page',
        'add_new' => 'Adicionar Novo texto na home',
        'add_new_item' => 'Adicionar pagina',
        'edit_item' => 'Editar pagina',
        'new_item' => 'Novo pagina',
        'view_item' => 'Ver pagina',
        'search_items' => 'Procurar pagina',
        'not_found' => 'Nenhuma pagina encontrado',
        'not_found_in_trash' => 'Nenhuma pagina na Lixeira',
        'parent_item_colon' => '',
        'menu_name' => 'home-page'
    );

    $args = array(

    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
        
    'labels' => $descritivos, //Insere o Array de labels dentro do argumento de labels
    'public' => true, //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
    'hierarchical' => false, //Se o Custom Post pode ser hierarquico como as páginas
    'menu_position' => 5, //Posição do menu que será exibido
    'supports' => array('post-formats', 'post-formats', 'title', 'thumbnail', 'custom-fields', 'revisions', 'editor', 'page-attributes') //Quais recursos serão usados (metabox)
    );

    register_post_type('home_page', $args);
    flush_rewrite_rules();
}
