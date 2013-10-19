<section class="trafico">
    <header class="encabezado-seccion">
        <h2>
            TRÁFICO
        </h2>
        <a href="<?php echo get_category_link( get_cat_ID( 'El Tráfico' ) );?>" title="Ver Más" class="encabezado-seccion-boton">
            VER MÁS
        </a>
        <p>
            Reflexiones de nuestros colaboradores
        </p>
    </header>
    <?php $contador = 0; ?>
    <?php $argumentos = 'category_name=trafico&tag=home&posts_per_page=4'; ?>
    <?php query_posts( $argumentos ); ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
        <?php if($contador == 0 || $contador == 2){ ?>    
            <div class="trafico-post-wrapper-<?php echo ($contador == 0) ? 0 : 1; ?>">
        <?php } ?>
            <div class="trafico-post trafico-post-<?php echo $contador; ?>">
                <?php if($contador == 0): ?>
                    <div onclick="slideTraficoIzq();" class="flechaIzquierda"></div>
                <?php elseif($contador == 1): ?>
                    <div onclick="slideTraficoIzq();" class="flechaDerecha"></div>
                <?php elseif($contador == 2): ?>
                    <div onclick="slideTraficoDer();" class="flechaIzquierda"></div>
                <?php elseif($contador == 3): ?>
                    <div onclick="slideTraficoDer();" class="flechaDerecha"></div>
                <?php endif; ?>
                <a class="trafico-post-titulo" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                </a>
                <div class="trafico-post-texto">
                    <a class="trafico-post-titulo" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                    <div class="trafico-post-autor">
                        por <?php the_author_posts_link(); ?>
                    </div>
                </div>
            </div>
        <?php if($contador == 1 || $contador == 3){ ?>    
            </div>
        <?php } ?>
    <?php $contador++; ?>
    <?php endwhile; ?>
</section>