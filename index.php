<?php get_header() ?>


<div class="row">
    <div class="col-lg-12">
        <?php dynamic_sidebar('topo') ?>
    </div>
</div>

<?php get_template_part("template_part/home"); ?>
<?php dynamic_sidebar('parte_de_baixo');?>
<?php get_footer(); ?>