<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 erro">
            <h2>ops! Erro 404!</h2>
            <p>
               Essa página não existe, mas não se preocupe, seguem alguns links para ajuda-lo a achar a página que precisa!
            </p> 
            <hr>
            <?php
            wp_nav_menu(array('menu' => 'erro'));
            ?>
            <hr>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</body>
<?php wp_footer(); ?>