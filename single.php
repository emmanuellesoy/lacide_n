<?php get_header(); ?>
<section class="columna-principal">
    <section class="columna-principal-fondo">
        <?php get_template_part('general/head', 'file'); ?>
		<div class="contenedorSingle">
        <?php get_template_part('single/cuerpo', 'nota'); ?>
	     <?php comments_template(); ?> 
		</div>        
        <?php get_sidebar(); ?>
        <?php get_template_part('general/general', 'footer'); ?>
        <?php get_template_part('general/tikitaka', 'footer'); ?>
    </section>
</section>
<?php get_footer(); ?>