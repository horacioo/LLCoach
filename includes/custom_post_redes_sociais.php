<?php
registrar_Redes_Sociais();
function registrar_Redes_Sociais() {

  $descritivos = array(
    'name' => 'Redes_Sociais',
    'singular_name' => 'Rede social',
    'add_new' => 'Adicionar Nova Rede',
    'add_new_item' => 'Adicionar rede',
    'edit_item' => 'Editar rede',
    'new_item' => 'Novo rede',
    'view_item' => 'Ver rede',
    'search_items' => 'Procurar rede',
    'not_found' =>  'Nenhuma rede encontrado',
    'not_found_in_trash' => 'Nenhuma rede na Lixeira',
    'parent_item_colon' => '',
    'menu_name' => 'Redes Sociais'
  );

  $args = array(
    'labels' => $descritivos,  //Insere o Array de labels dentro do argumento de labels
    'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
    'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
    'menu_position' => 5,  //Posição do menu que será exibido
    'supports' => array('title','thumbnail', 'custom-fields', 'revisions') //Quais recursos serão usados (metabox)
    );

  register_post_type( 'Redes_Sociais' , $args );
  flush_rewrite_rules();


}
