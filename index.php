<?php get_header() ?>
<body <?php body_class(); ?>>

    <div class="container"> 
        <div class="row">
           <?php //ShowImagem();?> 
            <?php //Logotipo(); ?>
            <div class="col-lg-4"><h1><?php echo bloginfo(title); ?></h1></div>
            <div class="col-lg-6"><?php get_template_part('includes/menu')?></div>
            <div class="col-lg-2">redes sociais</div>
        </div>
        <div class="row">
            <?php get_template_part("template_part/home");?>
        </div>
    </div>
</body>
<?php
get_footer()?>