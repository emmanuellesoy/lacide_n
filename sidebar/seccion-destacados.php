<section class="destacados">
    <header class="destacadosEncabezado">
        <h2>DESTACADOS</h2>
    </header>
    <?php $argumentos = 'category_name=destacados&posts_per_page=3'; ?>
    <?php query_posts( $argumentos ); ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
    <div class="destacadosNota">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        <div class="destacadosNotafondo"></div>
        <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
        </a>
    </div>
    <?php endwhile; ?>
</section>