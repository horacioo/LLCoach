<?php
while (have_posts()) : the_post();
    $id = get_the_ID();
    ?>
        <?php Thumb(); ?>
        <?php the_content(); ?>
        <?php echo edit_post_link("editar"); ?>
    <?php echo get_the_date(); ?>
<?php endwhile; ?>
 