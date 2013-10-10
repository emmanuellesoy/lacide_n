<section class="postIt">
    <?php $argumentos = 'category_name=postit&orderby=rand&posts_per_page=1'; ?>
    <?php query_posts( $argumentos ); ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
        <h2>
            <?php the_title(); ?>
        </h2>
        <h3 onclick="ver_respuesta();">
            Clic para ver la respuesta
        </h3>
        <h4>
            <?php the_content(); ?>
        </h4>
    <?php endwhile; ?>
</section>