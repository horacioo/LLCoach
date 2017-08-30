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









/***************************************/
/***************************************/
/***************************************/
/***************************************/
/***************************************/
/***************************************/
add_action('add_meta_boxes', 'MetaBoxesAnuncioCores');
function MetaBoxesAnuncioCores() {
    add_meta_box(
            'cor', //ID
            'cores do anuncio', //Título
            'CorPlacas', //callback
            'anuncios', //Post Type
            'side', //Posição
            'default' //Prioridade
    );
}
function CorPlacas() {
    global $post;
    $cor1 = get_post_meta($post->ID, "cor1");  
    $cor2 = get_post_meta($post->ID, "cor2");  
    $cor3 = get_post_meta($post->ID, "cor3");
    $cor4 = get_post_meta($post->ID, "cor4");
    $cor5 = get_post_meta($post->ID, "cor5");
    ?>
    <p><label>parte frontal do banner</label>            <input type="color" name="cor1" value="<?php echo $cor1[0]?>"></p>
    <p><label>texto da parte frontal do banner</label>   <input type="color" name="cor2" value="<?php echo $cor2[0]?>"></p>
    <p><label>parte traseira do banner</label>           <input type="color" name="cor3" value="<?php echo $cor3[0]?>"></p>
    <p><label>texto da parte traseira do banner</label>  <input type="color" name="cor4" value="<?php echo $cor4[0]?>"></p>
    <p><label>cor do link</label><input type="color" name="cor5"  value="<?php echo $cor5[0]?>"></p>
<?php
}

add_action('save_post', 'salva_cor');
function salva_cor() {
    global $post;
    update_post_meta($post->ID, 'cor1', sanitize_text_field($_POST['cor1']));
    update_post_meta($post->ID, 'cor2', sanitize_text_field($_POST['cor2']));
    update_post_meta($post->ID, 'cor3', sanitize_text_field($_POST['cor3']));
    update_post_meta($post->ID, 'cor4', sanitize_text_field($_POST['cor4']));
    update_post_meta($post->ID, 'cor5', sanitize_text_field($_POST['cor5']));
    
}
/***************************************/
/***************************************/
/***************************************/
/***************************************/
/***************************************/
/***************************************/