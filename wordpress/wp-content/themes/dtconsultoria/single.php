<!-- Usado quando clica um determinado post e direciona para que esse abra individualmente -->


<div class="container">
    <div class="row">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
                <?php the_post();?>


            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
