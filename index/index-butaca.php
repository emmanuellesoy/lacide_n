<section class="butaca">
    <header class="encabezado-seccion">
        <h2>
            BUTACA
        </h2>
        <a href="<?php echo get_category_link( get_cat_ID( 'Butaca' ) );?>" title="Ver Más" class="encabezado-seccion-boton">
            VER MÁS
        </a>
        <p>
            El video del día
        </p>
    </header>
    <?php $argumentos = 'category_name=butaca&posts_per_page=1'; ?>
    <?php query_posts( $argumentos ); ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
        <?php $meta = get_post_custom(get_the_ID); ?>
        <div class="butaca-post">
            <iframe width="350" height="215" src="<?php echo $meta['Link'][0]; ?>" frameborder="0" ></iframe>
            <div class="butaca-post-texto">
                <a class="butaca-post-titulo" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
                <div class="butaca-post-texto-descripcion">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="butaca-redes">
                <div class="butaca-redes-elemento">
                    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()); ?>&amp;send=false&amp;layout=button_count&amp;width=70&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=90&amp;appId=279290438845254" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:90px;" allowTransparency="true"></iframe>        
                </div>
                <div class="butaca-redes-elemento butaca-redes-elemento-twitter">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-text="<?php the_title(); ?>" data-via="lacd_deportiva">Tweettear</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>