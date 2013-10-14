<section class="masLeido">
    <header class="masLeido">
        <h2>
            MÁS PREMIADO
        </h2>
    </header>
    <ol>
       <?php

        function filter_where( $where = '' ) {

            $where .= " AND post_date > '" . date('Y-m-d', strtotime('-24 hours')) . "'";

            return $where;

        }

        add_filter( 'posts_where', 'filter_where' );

        $args = array(  'meta_key' => 'prize', 'orderby' => 'meta_value_num',  'order' => 'DESC', 'posts_per_page' => 10   );

        $result = new WP_Query($args);

        remove_filter( 'posts_where', 'filter_where' );

        ?>

        <?php while ($result->have_posts()) : $result->the_post(); ?>
        <li>
            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </li>
        <?php endwhile; ?>
    </ol>
</section>