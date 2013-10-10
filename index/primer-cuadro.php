<section class="primer-cuadro">
    <?php query_posts('category_name=primer-cuadro&posts_per_page=4'); ?>
    <?php $contador = 0; ?>
    <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <section id="cuadro-<?php echo $contador; ?>" class="primer-cuadro-post <?php echo ($contador > 0)? 'primer-cuadro-post-oculto' : ''; ?>" data-active="<?php echo ($contador == 0)? 'true' : 'false'; ?>" data-cuadro="<?php echo $contador; ?>">
        <div class="primer-cuadro-img">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'primer-cuadro' ); } ?>
        </div>
        <div class="primer-cuadro-texto">
            <h2>
                <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
        </div>
        <nav class="primer-cuadro-post-nav">
            <div class="primer-cuadro-post-nav-bolita primer-cuadro-post-nav-bolita-uno <?php echo ($contador == 0)? 'primer-cuadro-post-nav-bolita-activa' : ''; ?>"></div>
            <div class="primer-cuadro-post-nav-bolita <?php echo ($contador == 1)? 'primer-cuadro-post-nav-bolita-activa' : ''; ?>"></div>
            <div class="primer-cuadro-post-nav-bolita <?php echo ($contador == 2)? 'primer-cuadro-post-nav-bolita-activa' : ''; ?>"></div>
            <div class="primer-cuadro-post-nav-bolita <?php echo ($contador == 3)? 'primer-cuadro-post-nav-bolita-activa' : ''; ?>"></div>
        </nav>
    </section>
    <?php $contador++; ?>
    <?php endwhile; ?>
</section>