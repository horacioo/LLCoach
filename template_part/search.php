<div class="container">
    <div class="row">
        <h2> <?php printf(__('Search Results for: %s', 'twentyfifteen'), get_search_query()); ?></h2>
    </div> 
</div>


<div class="container">
    <div class="row search">
        <?php
        while (have_posts()) : the_post();
            $id = get_the_ID();
            ?>
            <div class="col-md-3">

                <div class="thumbnail">
                    <?php $x = get_the_post_thumbnail($id, "thumbnail"); ?><?php echo $x; ?>
                    <div class="caption">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt();?></p>
                        <p><a href="<?php echo get_permalink() ?>" rel="nofollow" class="btn btn-default" role="button">Acessar</a></p>
                    </div>
                </div>
                
            </div>
        <?php endwhile; ?>
    </div>
</div>