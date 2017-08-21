<div class="row">
    <div style="
         background-color: white;
         height: auto;
         overflow: auto;
         padding: 10px;
         border-radius: 8px;
         ;">tert ert 
         <?php
         while (have_posts()) : the_post();
             $id = get_the_ID();
             ?>
             <?php the_title(); ?>
            <div class="col-lg-12" ><?php the_title(); ?></div>
            <div class="col-md-12">
                <?php the_content(); ?>
                <?php echo edit_post_link("editar"); ?>
            </div>
            <div class="col-md-12 rodape_Data"><?php echo get_the_date(); ?></div>
        <?php endwhile; ?>
    </div>
</div>