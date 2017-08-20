<div class="row">
    <?php
    while (have_posts()) : the_post();
        $id = get_the_ID();
        ?>
        
            <div class="col-lg-12 baixo" ><?php the_title(); ?></div>
            <div class="col-md-12 baixo">
                <?php the_content(); ?>
                <?php echo edit_post_link("editar"); ?>
            </div>
            <div class="col-md-12 rodape_Data baixo"><?php echo get_the_date(); ?></div>
      


    <?php endwhile; ?>

</div>