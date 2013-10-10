<?php get_header(); ?>
<section class="columna-principal">
    <section class="columna-principal-fondo">
        <?php get_template_part('general/head', 'file'); ?>
        <?php get_template_part('index/primer', 'cuadro'); ?>
        <?php get_template_part('index/esta', 'pasando'); ?>
        <?php get_template_part('index/anuncio', 'principal'); ?>
        <?php get_sidebar(); ?>
        <?php get_template_part('index/index', 'trafico'); ?>
        <?php get_template_part('index/index', 'estadio'); ?>
        <?php get_template_part('index/index', 'kiosco'); ?>
        <?php get_template_part('index/index', 'cabina'); ?>
        <?php get_template_part('index/index', 'universidad'); ?>
        <?php get_template_part('index/index', 'butaca'); ?>
        <?php get_template_part('index/index', 'frontera'); ?>
        <?php get_template_part('general/general', 'footer'); ?>
        <?php get_template_part('general/tikitaka', 'footer'); ?>
        </section>
</section>
<?php get_footer(); ?>