<?php get_header() ?>
<body <?php body_class(); ?>>

    <div class="container"> 
        <div class="row">
           <?php //ShowImagem();?> 
            <?php //Logotipo(); ?>
            <div class="col-sm-12 col-lg-2 logotipoTopo"><?php Logotipo() /*echo bloginfo(title);*/ ?></div>
            <div class="col-sm-12 col-lg-8 menuTopo"><?php get_template_part('includes/menu')?></div>
            <div class="col-sm-12 col-lg-2 redes_sociaisTopo">apenas um teste</div>
            <!--<div class="col-lg-1">redes sociais</div>-->
        </div>
        <div class="row">
            <?php get_template_part("template_part/home");?>
        </div>
    

<?php
get_footer();

?>