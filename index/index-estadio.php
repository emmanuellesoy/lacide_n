<section class="estadio">
    <header class="encabezado-seccion">
        <h2>
            ESTADIO
        </h2>
        <a href="<?php echo get_category_link( get_cat_ID( 'El Estadio' ) );?>" title="Ver Más" class="encabezado-seccion-boton">
            VER MÁS
        </a>
        <p>
            Sucesos deportivos al momento
        </p>
    </header>
    <?php $argumentos = 'category_name=el-estadio&tag=home&posts_per_page=3'; ?>
    <?php query_posts( $argumentos ); ?>
    <?php $contador = 1; ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
        <?php if($contador == 1){ ?>
    <div class="estadioNotaReciente">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>     
            <div class="fondoTituloTransparencia"></div>   
        <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
        </a>
    </div>
        <?php } else { ?>
            <?php if($contador == 2){ ?>
                <div class="estadioContenedorNotas">
            <?php } ?>
            <div class="estadioNota<?php echo ($contador > 2) ? ' estadioNotaFinal' : '' ;?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </div>
            <?php if($contador == 5){ ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php $contador++; ?>
    <?php endwhile; ?>
</section>