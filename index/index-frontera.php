<section class="frontera">
    <header class="fronteraHeader">
        <h2>FRONTERA</h2>
        <p>Porque no sólo vivimos de deporte</p>
    </header>
    <?php $argumentos = 'category_name=la-frontera&posts_per_page=4'; ?>
    <?php query_posts( $argumentos ); ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
    <div class="fronteraNota">
        <div class="fronteraNotaImg">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        </div>  
        <div class="fronteraNotaFondo"></div>
        <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
        </a>
    </div>
    <?php endwhile; ?>
</section>