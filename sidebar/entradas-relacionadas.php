<section class="destacados">
    <header class="destacadosEncabezado">
        <h2>RELACIONADOS</h2>
        <?php
            $posttags = get_the_tags();
            if ($posttags) {
              foreach($posttags as $tag) {
                $tag = $tag->slug;
                break;
              }
            }
    ?>
    </header>
     <?php $argumentos = 'tag='.$tag.'&posts_per_page=3&orderby=rand'; ?>
    <?php query_posts( $argumentos ); ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
    <div class="destacadosNota">
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
    <?php endwhile; ?>
</section>