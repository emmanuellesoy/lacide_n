<section class="cabina">
    <header class="cabina-encabezado">
        CABINA
    </header>
    <?php $argumentos = 'category_name=cabina&posts_per_page=1'; ?>
    <?php query_posts( $argumentos ); ?>
    <?php $contador = 1; ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
    <div class="cabina-post">
        <div class="cabina-post-img">
            <?php the_content(); ?>
        </div>
        <div class="cabina-post-titulo-fondo"></div>
        <div class="cabina-post-titulo">
            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </div>
    </div>
    <div class="cabina-post-redes">
            <div class="cabina-post-redes-elemento <?php echo ($contador == 1) ? 'cabnia-post-redes-elemento-primero' : '' ?>">
                <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()); ?>&amp;send=false&amp;layout=button_count&amp;width=70&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=90&amp;appId=279290438845254" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:90px;" allowTransparency="true"></iframe>        
            </div>
            <div class="cabina-post-redes-elemento">
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-text="<?php the_title(); ?>" data-via="lacd_deportiva">Tweettear</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
            <a href="<?php echo get_category_link( get_cat_ID( 'Cabina' ) );?>" title="Ver Más" class="cabina-post-ver-mas">
                VER MÁS
            </a>
        </div>
    <?php $contador++; ?>
    <?php endwhile; ?>
</section>