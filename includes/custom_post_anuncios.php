<?php
registrar_anuncios();
function registrar_anuncios() {

  $descritivos = array(
    'name' => 'anuncios',
    'singular_name' => 'anuncios',
    'add_new' => 'Adicionar Novo anuncio',
    'add_new_item' => 'Adicionar anúncios',
    'edit_item' => 'Editar anúncios',
    'new_item' => 'Novo anúncios',
    'view_item' => 'Ver anúncios',
    'search_items' => 'Procurar anúncios',
    'not_found' =>  'Nenhuma anúncios encontrado',
    'not_found_in_trash' => 'Nenhuma anúncios na Lixeira',
    'parent_item_colon' => '',
    'menu_name' => 'anuncios'
  );

  $args = array(
    'labels' => $descritivos,  //Insere o Array de labels dentro do argumento de labels
    'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
    'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
    'menu_position' => 5,  //Posição do menu que será exibido
    'supports' => array('post-formats','post-formats','title','thumbnail', 'custom-fields', 'revisions','editor','page-attributes') //Quais recursos serão usados (metabox)
    );

  register_post_type( 'anuncios' , $args );
  flush_rewrite_rules();


}
