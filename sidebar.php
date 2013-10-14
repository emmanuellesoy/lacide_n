<aside class="barra-lateral">
    <?php if(is_single()){ ?>
    <div class="bannerOpc">
        <?php get_template_part('sidebar/box', 'banner'); ?>
    </div>
    <?php get_template_part('sidebar/autor', 'nota') ?>
    <?php get_template_part('sidebar/botones', 'funciones') ?>
        <?php get_search_form(); ?>
        <?php get_template_part('sidebar/halfpage', 'banner'); ?>
        <?php get_template_part('sidebar/mas', 'premiados'); ?>
        <?php get_template_part('sidebar/entradas', 'relacionadas'); ?>
    <?php } else { ?>
        <section class="cajaDeBusquedaChica">
            <form method="get" id="searchform" action="<?php bloginfo('wpurl') ?>">
                <input type="submit" value="">
                <input type="text" class="field" name="s" id="s" placeholder="Buscar" value="<?php the_search_query(); ?>"/>
            </form>
        </section><!-- Termina seccion de busqueda [.search-box] -->
        <?php get_template_part('sidebar/box', 'banner'); ?>
        <?php //get_template_part('sidebar/box', 'bannerSecundario'); ?>
        <?php get_template_part('sidebar/seccion', 'destacados'); ?>
        <?php get_template_part('sidebar/post', 'it'); ?>
        <?php get_template_part('sidebar/mas', 'leidos'); ?>
    <?php } ?>
</aside>