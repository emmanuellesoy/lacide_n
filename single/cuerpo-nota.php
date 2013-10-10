<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $meta = get_post_custom(); ?>
<?php
        $categories = get_the_category();
        $separator = ' ';
        $output = '';
        if($categories){
            foreach($categories as $category) {
                $output .= ' '.str_replace(array('el ', 'destacados'), array(' ', ' '), strtolower($category->cat_name));
            }
        $categorias = trim($output, $separator);
        }
    ?>
<section class="notaSencilla">
    <div class="notaSencillaImg <?php echo $categorias; ?>">
        <?php if($meta['Link'][0]){ ?>
            <iframe width="728" height="328" src="<?php echo $meta['Link'][0]; ?>" frameborder="0" ></iframe>
        <?php } else { ?>
            <?php if($meta['imagen_buscador'][0]){ ?>
                <img src="<?php echo $meta['imagen_buscador'][0]; ?>" alt="<?php echo $title; ?>">
            <?php } else {
                 if ( has_post_thumbnail() ) { the_post_thumbnail( 'primer-cuadro' ); }
            } ?>
        <?php } ?>
    </div>
    <h4><?php the_title(); ?></h4>
    <h5>
        por <?php the_author_posts_link(); ?> | <?php the_date(); ?> <?php the_time(); ?>
    </h5>
    <div class="notaSencillaRedesSociales">
        <div class="cajaRedesSociales">
            <div class="cajaRedesElemento cajaRedesFacebook">
                <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()); ?>&amp;send=false&amp;layout=button_count&amp;width=113&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=279290438845254" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:113px; height:21px;" allowTransparency="true"></iframe>
            </div>
            <!-- Termina cajaRedesFace -->
            <div class="cajaRedesElemento cajaRedesTwitter">
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="LaCD_Deportiva" data-lang="es">Twittear</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
            <!-- Termina cajaRedesTwit -->
            <div class="cajaRedesGoo cajaRedesElemento">
                <div class="g-plusone" data-size="medium"></div>
                <script type="text/javascript">
                  window.___gcfg = {lang: 'es'};

                  (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                </script>
            </div>
            <!-- Termina cajaRedesGoo -->
            <div class="cajaHit cajaRedesElemento" onclick="premiar(<?php echo get_the_ID(); ?>);">
                <?php echo ($meta['prize'][0]) ? $meta['prize'][0] : 0; ?>
            </div>
            <!-- Termina cajaHit -->
            <?php $adjacent_post = get_adjacent_post(false, '', true) ; ?>
                    <?php $post_id = $adjacent_post->ID; ?>
                        <a href="<?php echo get_permalink($post_id); ?>">
                            <div class="cajaNotaAnterior">
                            </div>
                        </a>
                        <?php $adjacent_post = get_adjacent_post(false, '', false) ; ?>
                        <?php $post_id = $adjacent_post->ID; ?>
                        <a href="<?php echo get_permalink($post_id); ?>">
                            <div class="cajaNotaSiguente">
                            </div>
                        </a>
            <!-- Termina Anterior Siguiente -->
        </div>
        <!-- Termina cajaRedesSociales -->
    </div>
    <article class="notaSencillaTexto">
        <?php the_content(); ?>
    </article>
    <?php get_template_part('single/boton', 'premialo'); ?>
    <?php get_template_part('single/lista', 'etiquetas'); ?>
</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php //do_action( 'social_connect_form' ); ?>
<?php get_template_part('single/anterior', 'siguiente'); ?>