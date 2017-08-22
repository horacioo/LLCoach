<?php
/*
  Template Name: página com bloco na esquerda
 */
?>
<?php get_header(); ?>
<div class="row">
    <div class="container-fluid conteudo_page_post ">
        
        
        <div class="col-lg-4">
            <?php
            if (is_active_sidebar("esquerda")) { dynamic_sidebar("anuncios_esquerda"); }
            ?>
        </div>        
        <div class="col-lg-8">
            <?php get_template_part('template_part/conteudo'); ?>
        </div>
        
    </div>
</div>
<?php get_footer(); ?>