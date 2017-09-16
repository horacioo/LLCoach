
<?php
$tag = get_the_tags();
$tag = (array) $tag;
$tagx = (array) $tag[0];
?>
<!--<div class="pesquisa">Pesquisando pela Tag: "<b><?php echo $tagx['name']; ?></b>"</div>--->

<?php if (have_posts()): ?>
    <ul>
        <?php
        while (have_posts()) : the_post();
            $thumb = get_the_post_thumbnail($id, $size = 'medium'); //
            echo"<li class='lista_links_tag'>";
            echo"<div class='thumb'>" . $thumb . "</div>";
            echo"<div class='nome_link '><a href='" . get_permalink() . "'  rel='nofollow' ><h2>" . get_the_title() . "</h2></a></div>";
            echo"<div class='texto'>";
            the_excerpt();
            echo"</div>";
            echo"</li>";
            ?>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>