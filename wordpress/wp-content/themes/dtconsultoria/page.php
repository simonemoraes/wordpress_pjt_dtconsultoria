<!-- O page é criado para ao clicar em uma link de página seja exibido o conteudo da pagina -->

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
                <?php the_post();
                the_title();
                the_content();
                ?>


            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer();?>