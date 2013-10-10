<section class="estaPasando">
    <header class="estaPasandoHeader">
        ESTÁ PASANDO
    </header>
    <ul>
        <?php $argumentos = 'category_name=esta-pasando&posts_per_page=5'; ?>
        <?php query_posts( $argumentos ); ?>
        <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
        <?php $meta = get_post_custom(); ?>
        <li>
            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                <?php echo $meta['estaPasando'][0]; ?>
            </a>
        </li>
        <?php endwhile; ?>
    </ul>
</section>
    