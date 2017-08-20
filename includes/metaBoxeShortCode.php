<?php
add_action('add_meta_boxes', 'MetaBoxeAnuncio');

function MetaBoxeAnuncio() {
    add_meta_box(
            'link', //ID
            'shortCode', //Título
            'ShortCodeAnuncio', //callback
            'anuncios', //Post Type
            'side', //Posição
            'default' //Prioridade
    );
}








function ShortCodeAnuncio() {
    global $post;
    $link = get_post_meta($post->ID, "link"); // $carga_horaria = get_post_meta($post->ID, 'carga_horaria', true);
    $thumb = get_post_meta($post->ID, "thumb");
   ?>
     <input type="text" style="width: 100%" name="shortcode"  value="[anuncios id=<?php echo $post->ID; ?>]">    
    <?php
 
}






/*

add_action('save_post', 'salva_link');

function salva_link() {
    global $post;
    $imagem = FiltraImagem();
    update_post_meta($post->ID, 'link', sanitize_text_field($_POST['link']));
    update_post_meta($post->ID, 'thumb', sanitize_text_field($imagem));
}
*/
