<?php get_header(); ?>
<section class="columna-principal">
    <section class="columna-principal-fondo">
        <?php get_template_part('general/head', 'file'); ?>
        <?php get_template_part('listado/encabezado', 'buscador'); ?>      	
        <?php get_template_part('general/listado', 'loop') ?>
        <?php get_template_part('general/tikitaka', 'footer'); ?>
    </section>
</section>
<?php get_footer(); ?>