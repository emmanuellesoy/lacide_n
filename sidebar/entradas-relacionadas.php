<section class="destacados">
    <header class="destacadosEncabezado">
        <h2>RELACIONADOS</h2>
    </header>        
    <?php 
    
    $posttags = get_the_tags($wp_query->post->ID);
    
    if ($posttags) {
   
        $contador = 0;
   
        foreach($posttags as $tag) {
    
            $post_per_page = 3 - $contador;
            
            if($contador > 2){
            
            break;
        }
    
        if($tag->slug == 'home' || $tag->slug == 'esta-pasando'){ continue; }
        
        $args_fp = array(
        
          'post__not_in' => array($wp_query->post->ID),
        
          'posts_per_page' => $post_per_page,
        
          'tag' => $tag->slug,
        
          'orderby' => 'rand'
        
        );
        
        $my_query_fp = new WP_Query($args_fp);
        
        ?>    
        
        <?php while ( $my_query_fp->have_posts() ): ?>

            <?php $my_query_fp->the_post(); ?>

            <div class="destacadosNota">

            <?php $contador++; ?>

            <?php $cf = get_post_custom(); ?>

            <?php if($cf['Link'][0]){ ?>

                <iframe width="270" height="180" src="<?php echo $cf['Link'][0]; ?>" frameborder="0" ></iframe>

            <?php } else { ?>

                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

            <?php } ?>

                <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">

                    <?php the_title(); ?>

                </a>

            </div>

        <?php endwhile; 
        }
        
    }
    
    ?>

</section>
