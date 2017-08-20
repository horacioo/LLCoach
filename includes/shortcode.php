<?php
add_shortcode("anuncios", anuncio);
function anuncio($atts, $content = "") {
    $post = get_post($atts['id']);
    $thumb = get_the_post_thumbnail($atts['id'], 'thumbnail');
    $retorno = "<div class='anuncios'>";
    $retorno .= "$thumb";
    $retorno .= $post->post_title;
    $retorno .= $post->post_excerpt;
    $retorno .= "</div>";
    return "$retorno";
}
