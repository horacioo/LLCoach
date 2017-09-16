<?php

while (have_posts()) : the_post();
    $id = get_the_ID();
    ?>
    <?php Thumb(); ?>
    <?php the_content(); ?>
    <hr>
       
     <p>Escrito por: <?php the_author_posts_link(); ?></p>
    
    </hr>
    <?php echo edit_post_link("editar"); ?>
    <?php echo get_the_date(); ?>
<?php endwhile; ?>
 