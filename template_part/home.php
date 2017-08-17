<?php
$classe = "p1_verde_escuro";
$linha = 0;
$args = array('post_type' => 'home_page', "posts_per_page" => "5",);
$my_posts = get_posts($args);
foreach ($my_posts as $post): setup_postdata($post);
    $dados = get_post_meta($post->ID);
    ?>
    <style>
        a{color:<?php echo $dados['colorlink'][0] ?> }
        a:hover{color:<?php echo $dados['colorlink'][0] ?> }
    </style>
    <div class="row">
        <div class="col-sm-12 home" style="background-color:<?php echo $dados['color'][0] ?>">
            <h2 style="color: <?php echo $dados['colortit'][0] ?>"><?php echo $post->post_title; ?></h2>
            <?php echo $post->post_content; ?>
        </div>
    </div>
    <?php
    $linha++;
endforeach;
?>