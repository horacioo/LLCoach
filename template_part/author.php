<div class="container">
    <div class="row">
        <div class="col-lg-12 author_info">
            <p><h2><?php echo get_the_author(); ?></h2></p>
        
            <p><?php echo get_avatar(get_the_author_meta('email'), $author_bio_avatar_size); ?></p>

            <hr>
            <p>Sobre o autor: </p>
            <p class="bio"><?php echo the_author_meta('description'); ?></p>

            <hr>
            <p>E-mail: <b><?php echo the_author_meta('email'); ?></b></p>

            <hr>
            <p>Internet: 
                <b>
                    <a href="<?php echo the_author_meta('url'); ?>"  target="_blank" >
                        <b><?php echo the_author_meta('url'); ?></b>
                    </a>
                </b>
            </p>
        </div>
    </div>
</div>