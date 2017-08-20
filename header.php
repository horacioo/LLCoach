<?php $url_tema = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"  rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <?php wp_head(); ?>

        
        <link href="<?php echo $url_tema; ?>/css/menu.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="<?php echo $url_tema; ?>/js/menu.js"></script>

    </head>
    <header class="p1_header"></header>


    <body <?php body_class(); ?>>
        <div class="container"> 
            <div class="row-fluid">
                <?php //ShowImagem();?> 
                <?php //Logotipo(); ?>
                <div class="col-xs-2 logotipoTopo"><?php Logotipo() /* echo bloginfo(title); */ ?></div>
                <div class="col-sm-8"><?php get_template_part('template_part/menu') ?></div>
                <div class="col-xs-2">redes sociais</div>
            </div>