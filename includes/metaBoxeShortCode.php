<?php
add_action('add_meta_boxes', 'MetaBoxeRedesSociais');

function MetaBoxeRedesSociais() {
    add_meta_box(
            'link', //ID
            'Endereço da página', //Título
            'Link_mb', //callback
            'anuncios', //Post Type
            'normal', //Posição
            'default' //Prioridade
    );
}








function Link_mb() {
    global $post;
    $link = get_post_meta($post->ID, "link"); // $carga_horaria = get_post_meta($post->ID, 'carga_horaria', true);
    $thumb = get_post_meta($post->ID, "thumb");
    media_buttons('media');
    ?>
    <input type="text" style="width: 100%" name="link" required="required" value="<?php echo $link[0]; ?>"> 
    <!--<input type="text" style="width: 100%" name="thumb" required="required" id="media" value="<?php echo $thumb[0]; ?>"> -->
    <?php
}








add_action('save_post', 'salva_link');

function salva_link() {
    global $post;
    $imagem = FiltraImagem();
    update_post_meta($post->ID, 'link', sanitize_text_field($_POST['link']));
    update_post_meta($post->ID, 'thumb', sanitize_text_field($imagem));
}








function FiltraImagem() {
    $imagem = $_POST['thumb'];
    $x = explode('<img src=\"', $imagem);
    $x2 = explode("\"", $x[1]);
    var_dump($x2[0]);
    $imagem = str_replace('"', "", $x2[0]);
    return $imagem;
}







