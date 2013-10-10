<?php get_template_part('listado/imagen', 'encabezado'); ?>
<div class="resultadosencabezado">
	<?php if(is_category()){ ?>
		<?php $args = array('include' => get_query_var('cat')); ?>
		<?php $categories = get_categories( $args ); ?>
		<?php foreach ( $categories as $category ) { ?>
		<p>
			<?php echo $category->name ?> tiene <?php echo $category->count ?> entradas
		</p>
		<?php } ?>
	<?php } elseif (is_author()) { ?>
		<p>
			<?php echo str_replace('-', ' ', get_query_var('author_name')); ?> ha escrito <?=$wp_query->found_posts;?> entradas</p>
	<?php } elseif(is_search()){ ?>
		<p><?=$wp_query->found_posts;?> resultados sobre "<?php the_search_query(); ?>"</p>
	<?php } ?>
</div>
<div id="filtros" class="resultadosEncabezadoFiltros">
	<?php get_search_form(); ?>
	<div class="resultadosencabezadoOrdenar">
		<h6>Ordenar por:</h6>
		<h4 id="textoOrdena" onclick="aparecerOrden('or');">Más recientes</h4>
		<div id="listasOrdena" class="listasFiltros">
			<h6>ORDENAR</h6>
			<p class="sort" data-sort="data-id" data-order="asc">Más recientes</p>
			<p class="sort" data-sort="data-prize" data-order="asc">Más premiados</p>
			<!--<p><a href="">Más comentados</a></p>-->
		</div>
	</div>
	<div class="resultadosencabezadoFiltrar">
		<h6>Filtrar por:</h6>
		<h4 id="textoFiltra" onclick="aparecerOrden('fi');">Todas las secciones</h4>
		<div id="listasFiltro" class="listasFiltros ordenar">
			<h6>SECCIÓN</h6>
			<div class="listaordenarSeccionesWrap">
				<div class="listaordenarSecciones">
					<p class="filter" data-filter="primer" data-order="desc">Primer Cuadro</p>
					<p class="filter" data-filter="cabina" data-order="desc">Cabina</p>
				</div>
				<div class="listaordenarSecciones">
					<p class="filter" data-filter="trafico" data-order="desc">Tráfico</p>
					<p class="filter" data-filter="frontera" data-order="desc">Frontera</p>
				</div>
				<div class="listaordenarSecciones">
					<p class="filter" data-filter="estadio" data-order="desc">Estadio</p>
					<p class="filter" data-filter="butaca" data-order="desc">Butaca</p>
				</div>
				<div class="listaordenarSecciones">
					<p class="filter" data-filter="kiosco" data-order="desc">Kiosco</p>
					<p class="filter" data-filter="cartones" data-order="desc">Cartones</p>
				</div>
				<div class="listaordenarSecciones listaordenarSeccionesTodos">
					<p class="filter" data-filter="all" data-order="desc">Todas las secciones</p>
				</div>
			</div>
			<!--<p><a href="">Más comentados</a></p>-->
		</div>		
	</div>
</div>