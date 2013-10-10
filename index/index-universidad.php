<?php //$secciones_universidad = array('cartones', 'biblioteca-2', 'musica-3', 'cineteca'); ?>
<?php $secciones_universidad = array('cartones'); ?>
<?php for ($i = 0; $i <= 3; $i++): ?>
<?php $flechaIzquierda = ($i != 0) ? $secciones_universidad[($i - 1)] : 'cineteca'; ?>
<?php $flechaDerecha = ($i != 3) ? $secciones_universidad[($i + 1)] : 'cartones'; ?>
    <section class="universidad <?php echo $secciones_universidad[$i]; ?> <?php echo ($secciones_universidad[$i] != 'cartones') ? 'hidden' : '' ; ?>">
        <!--<div onclick="cambiar_seccion('<?php echo $flechaIzquierda ?>', '<?php echo $secciones_universidad[$i] ?>');" class="flechaIzquierdaUniversidad"></div>-->
        <header class="universidad-encabezado">
            <?php echo strtoupper(str_replace(array('musica-3', 'biblioteca-2'), array('MÚSICA', 'BIBLIOTECA'), $secciones_universidad[$i])); ?>
        </header>
        <!--<div onclick="cambiar_seccion('<?php echo $flechaDerecha ?>', '<?php echo $secciones_universidad[$i] ?>');" class="flechaDerechaUniversidad"></div>-->
        <?php $argumentos = 'category_name='.$secciones_universidad[$i].'&posts_per_page=1'; ?>
        <?php query_posts( $argumentos ); ?>
        <?php $contador = 1; ?>
        <?php while ( have_posts() ): ?>
            <?php the_post(); ?>
        <div class="universidad-post">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <div class="universidad-post-titulo-fondo"></div>
            <div class="universidad-post-titulo">
                <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </div>
        </div>
        <div class="universidad-post-redes">
                <div class="universidad-post-redes-elemento <?php echo ($contador == 1) ? 'universidad-post-redes-elemento-primero' : '' ?>">
                    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()); ?>&amp;send=false&amp;layout=button_count&amp;width=70&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=90&amp;appId=279290438845254" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:90px;" allowTransparency="true"></iframe>        
                </div>
                <div class="universidad-post-redes-elemento">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-text="<?php the_title(); ?>" data-via="lacd_deportiva">Tweettear</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
                <a href="<?php echo get_category_link( get_cat_ID( $secciones_universidad[$i] ) );?>" title="Ver Más" class="universidad-post-ver-mas">
                    VER MÁS
                </a>
            </div>
            <?php $contador++; ?>
        <?php endwhile; ?>
    </section>
<?php endfor; ?>