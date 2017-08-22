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
/* o flip está no arquivo css
<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
			<!-- front content -->
		</div>
		<div class="back">
			<!-- back content -->
		</div>
	</div>
</div> */