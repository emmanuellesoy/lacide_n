<section class="kiosco">
    <header class="encabezado-seccion">
        <h2>
            KIOSCO
        </h2>
        <a href="<?php echo get_category_link( get_cat_ID( 'El Kiosco' ) );?>" title="Ver Más" class="encabezado-seccion-boton">
            VER MÁS
        </a>
        <p>
            Marketing y redes sociales
        </p>
    </header>
    <?php $argumentos = 'category_name=kiosco&tag=home&posts_per_page=3'; ?>
    <?php query_posts( $argumentos ); ?>
    <?php $contador = 1; ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
    <div class="kiosco-post <?php echo ($contador == 1) ? 'kiosco-post-primero' : '' ?>">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        <div class="kiosco-post-titulo-fondo"></div>
        <div class="kiosco-post-titulo">
            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </div>
    </div>
    <?php $contador++; ?>
    <?php endwhile; ?>
</section>