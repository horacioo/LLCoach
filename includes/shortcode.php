<?php

add_shortcode("anuncios", anuncio);

function anuncio($atts, $content = "") {
    $post = get_post($atts['id']);
    /*     * ******************* */
    /*     * ******************* */
    /*     * ******************* */
    $cor1 = get_post_meta($atts['id'], "cor1");
    $cor2 = get_post_meta($atts['id'], "cor2");
    $cor3 = get_post_meta($atts['id'], "cor3");
    $cor4 = get_post_meta($atts['id'], "cor4");
    $cor5 = get_post_meta($atts['id'], "cor5");
    /*     * ******************* */
    /*     * ******************* */
    /*     * ******************* */
    ?>

    <?php
    $link = get_permalink($atts['id']);
    $thumb = get_the_post_thumbnail($atts['id'], 'thumbnail');
    $retorno = "<div class='anuncios'>";
    $retorno .= " <div class = \"flip-container\" ontouchstart = \"this.classList.toggle('hover');\">";
    $retorno .= " <div class = \"flipper\">";
    $retorno .= " <div class = \"front\"  style='background-color:" . $cor1[0] . "!important; color:" . $cor2[0] . "!important;'    >";
    $retorno .= "$thumb";
    $retorno .= "<h3>" . $post->post_title . " </h3>";
    $retorno .= " </div>";
    $retorno .= " <div class = \"back\"   style='background-color:" . $cor3[0] . "!important; color:" . $cor4[0] . "!important;'  >";
    $retorno .= "<h3>" . $post->post_title . " </h3>";
    $retorno .= "<br>";
    $retorno .= $post->post_excerpt;
    $retorno .= "<br>";
    $retorno .= "<a href='$link' class='btn_back btn' style='background-color:" . $cor5[0] . "!important;'>acessar</a>";
    $retorno .= " </div>";
    $retorno .= " </div>";
    $retorno .= " </div>";
    $retorno .= "</div>";
    return $retorno;
}

add_shortcode("video", "abreVideo");

function abreVideo($atts, $content = "") {
    if (isset($atts['link'])) {
        $link = $atts['link'];
        $link = explode("v=", $link);
        $x = "<iframe class='video' frameborder='0' allowfullscreen='1' 
          height='auto' src='https://www.youtube.com/embed/" . $link[1] . "?autohide=1&amp;autoplay=1&amp;loop=0&amp;playlist=qWYpk0BCumU&amp;showinfo=0&amp;controls=0&amp;enablejsapi=1'>
        </iframe>";
        return $x;
    }
    /*
      style="
      top: 50%;
      left: 50%;
      position: absolute;
      transform: translate(-50%, -50%);
      width: 90%;
      height: 300px;
      margin-left: 0px;
      visibility: visible;" */
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