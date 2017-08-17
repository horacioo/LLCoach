<?php
add_action('add_meta_boxes', 'InsereCor');

function InsereCor() {
    add_meta_box(
            'color', //ID
            'Cores da página', //Título
            'Link_mb', //callback
            'home_page', //Post Type
            'side', //Posição
            'default' //Prioridade
    );
}



function Link_mb() {
    global $post;
    $color = get_post_meta($post->ID, "color"); // $carga_horaria = get_post_meta($post->ID, 'carga_horaria', true);
    $colortit = get_post_meta($post->ID, "colortit");
    $colorlink = get_post_meta($post->ID, "colorlink");
    //$thumb = get_post_meta($post->ID, "thumb");
    //media_buttons('media');
    ?>
<p><label>cor do fundo</label><input type="color" style="width: 200" name="color" required="required" value="<?php echo $color[0]; ?>"> </p>
<p><label>cor do título</label><input type="color" style="width: 200" name="colortit" required="required" value="<?php echo $colortit[0]; ?>"> </p>
<p><label>cor do link</label><input type="color" style="width: 200" name="colorlink" required="required" value="<?php echo $colorlink[0]; ?>"> </p>
    <?php
}








add_action('save_post', 'salva_color');

function salva_color() {
    global $post;
    
    update_post_meta($post->ID, 'color', sanitize_text_field($_POST['color']));
    update_post_meta($post->ID, 'colortit', sanitize_text_field($_POST['colortit']));
    update_post_meta($post->ID, 'colorlink', sanitize_text_field($_POST['colorlink']));
   
}
