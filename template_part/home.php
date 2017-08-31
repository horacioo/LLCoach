<hr id="separacao_topo">
<?php
$args = array('post_type' => 'home_page', "posts_per_page" => "5",);
$my_posts = get_posts($args);
foreach ($my_posts as $post): setup_postdata($post);
    $dados = get_post_meta(get_the_ID());
    ?>
    <style>
        a{color:<?php echo $dados['colorlink'][0] ?> }
        a:hover{color:<?php echo $dados['colorlink'][0] ?> }
        <?php if (strlen($dados['Imagem_fundo'][0]) > 5) { ?>/*strlen($imagem[0])> 5*/
            .informacao_<?php echo $post->ID; ?>{
                background: url(<?php echo $dados['Imagem_fundo'][0]; ?>);
                background-position: center top;
                background-size: 100% auto;
            }
        <?php } else { ?>
            .informacao_<?php echo $post->ID; ?>{
                background-color:<?php echo $dados['color'][0] ?> ;
            }   
        <?php } ?>
    </style>
    <div class="row">

        <div id="<?php echo get_the_title(); ?>" class="col-lg-12 home informacao_<?php echo $post->ID; ?>">
            <div>
                <p><h2 style="color: <?php echo $dados['colortit'][0] ?>"><?php echo get_the_title(); ?></h2></p>
                <?php echo the_content(); ?>
            </div>
        </div>

    </div>
    <?php
    $linha++;
endforeach;
?>