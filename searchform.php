<?php if( is_single()){ ?>
<section class="cajaDeBusquedaChica">
<?php } else { ?>
<section class="cajaDeBusqueda">
<?php } ?>
    <form method="get" id="searchform" action="<?php bloginfo('wpurl') ?>">
		<input type="submit" value="">
        <input type="text" class="field" name="s" id="s" placeholder="Buscar" value="<?php the_search_query(); ?>"/>
    </form>
</section><!-- Termina seccion de busqueda [.search-box] -->