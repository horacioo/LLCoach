<?php get_header(); ?>
<div class="row">
    <div class="container-fluid conteudo_page_post ">

        <div class="col-lg-5">
            <form action="" method="post" name="curso">
                <input type='hidden' name=curso[curso] value="<?php get_the_title() ?>" >
                <div><label>qual seu nome*</label><input type="text" name=curso[nome] required="required" class="form-control"></div>
                <div><label>qual o nome da empresa ou evento</label><input type="text" name=curso[empresa] class="form-control"></div>
                <div><label>qual seu telefone?*</label><input  name=curso[telefone] required="required"  type="text" class="form-control"></div>
                <div><label>qual seu email?*</label><input type="text"  name=curso[email]  required="required" class="form-control"></div>
                <div><label>qual a data do evento?</label><input  name=curso[data]  type="text" class="form-control"></div>
                <div><label>quem são as pessoas que estarão no evento?</label><input  name=curso[pessoasNoEvento]  type="text" class="form-control"></div>
                <div><label>qual é o propósito do evento?qual o problema a ser resolvido para esse grupo de pessoas?</label><input  name=curso[desafio]  type="text" class="form-control"></div>
                <div><label>site ou empresa do evento?</label><input  name=curso[siteDaEmpresa]  type="text" class="form-control"></div>
                <div><label>é um evento pago ou aberto ao público ou interno?</label><input  name=curso[eventoAberto]  type="text" class="form-control"></div>
                <div><label>o evento terá outros palestrantes?se sim, quais?</label><input  name=curso[palestrante]  type="text" class="form-control"></div>
                <div><label>explique o roteiro do evento, os detalhes de cada atividade</label><input  name=curso[descricao]  type="text" class="form-control"></div>
                <div><label>por que Lucas Leandro?</label><input  name=curso[porqueLucas]  type="text" class="form-control"></div>
                <div><label>Deixe seu recado</label><textarea  name=curso[recado]  class="form-control"></textarea></div>
                <br>
                <div><input type="submit" value="Contratar" class="btn btn-large btn-success"></div>
            </form>
        </div>
        <div class="col-lg-7">
            <?php
            while (have_posts()) : the_post();
                $id = get_the_ID();
                ?>
                <?php echo the_post_thumbnail($id, 'thumbnail'); ?>
                <p><h1><?php the_title(); ?></h1></p>
                <hr>
                <?php the_content(); ?>
                <?php echo edit_post_link("editar"); ?>
                <?php echo get_the_date(); ?>
            <?php endwhile; ?>
        </div>




        <?php EnviaEmail(); ?>



    </div>
</div>
<?php get_footer(); ?>