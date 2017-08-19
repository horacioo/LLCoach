<?php
add_post_type_support('page', 'excerpt');
add_post_type_support('post', 'excerpt');
add_post_type_support('anuncios', 'excerpt');
remove_action('init', 'wp_admin_bar_init');
add_theme_support('menus', 'widget');
add_theme_support('post-thumbnails');
//set_post_thumbnail_size(825, 510, true);
add_theme_support('title-tag');
add_theme_support('custom-background', array('default-color' => 'white'));
add_theme_support('custom-logo', array('height' => 90, 'width' => 90, 'flex-width' => true,));
add_filter('show_admin_bar', '__return_false');
register_nav_menu('menu_principal', 'Menu Principal - Topo');


/* * **** */
add_filter('widget_text', 'do_shortcode');
/* * **** */


/* * **************** */
$args = array(
    'width' => 2000,
    'height' => 650,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support('custom-header', $args);
/* * **************** */

function ShowImagem() {
    if (is_singular() &&
            has_post_thumbnail($post->ID) && ($image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-thumbnail') ) && $image[1] >= HEADER_IMAGE_WIDTH):
    else :
        ?>
        <img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
    <?php
    endif;
}

function Logotipo() {
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
}

/* * ********************************************************* */

function fb_change_mce_options($initArray) {
    $ext = 'pre[id|name|class|style],iframe[align|longdesc| name|width|height|frameborder|scrolling|marginheight| marginwidth|src]';

    if (isset($initArray['extended_valid_elements'])) {
        $initArray['extended_valid_elements'] .= ',' . $ext;
    } else {
        $initArray['extended_valid_elements'] = $ext;
    }

    return $initArray;
}

add_filter('tiny_mce_before_init', 'fb_change_mce_options');
/* * ********************************************************* */

function enable_more_buttons($buttons) {
    $buttons[] = 'hr';
    $buttons[] = 'fontselect';
    $buttons[] = 'sup';
    $buttons[] = 'superscript';
    $buttons[] = 'subscript';
    $buttons[] = 'tablecontrols';
    $buttons[] = 'fontsizeselect';
    $buttons[] = 'styleselect';
    $buttons[] = 'backcolor';
    $buttons[] = 'newdocument';
    $buttons[] = 'cut';
    $buttons[] = 'copy';
    $buttons[] = 'charmap';
    $buttons[] = 'hr';
    $buttons[] = 'visualaid';
    // etc, etc... 

    return $buttons;
}

add_filter("mce_buttons", "enable_more_buttons");
/* * ********************************************************* */
//require_once 'includes/custom_post_redes_sociais.php';
//require_once 'includes/metaBoxe.php';
require_once 'includes/custom_post_home_page.php';
require_once 'includes/metaBoxe_cor.php';
require_once 'includes/custom_post_anuncios.php';
require_once 'includes/shortcode.php';
/*****************************************************************/

register_sidebar(array(
 "name" => "index_rodape",
 "description" => "barra de conteudo para usar no rodape da esquerda",
 "id" => "rodape",
 "before_widget" => "<div class='conteudo_rodape'>",
 "after_widget" => "</div>",
));