<?php get_header(); ?>
	<div id="resultadosElementos" data-filtro="all">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
	<?php $cf = get_post_custom(); ?>
	<div data-id="<?php the_ID(); ?>" data-prize="<?php echo $cf['prize'][0]; ?>" class="resultadosElemento mix <?php echo $categorias; ?>">
	    <a class="resultadosElementoImagen" href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
			<?php if($cf['Link'][0]){ ?>
	            <iframe width="250" height="190" src="<?php echo $cf['Link'][0]; ?>" frameborder="0" ></iframe>
			<?php } else { ?>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<?php } ?>
		</a>
			<div class="elementosTexto">
		    <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
		        <?php $sub = $meta['Subtitulo'][0]; ?>
		        <?php echo (!empty($sub)) ? $sub : the_title(); ?>
		        <?php //the_title(); ?>
		    </a>
		    <p>por <?php the_author_posts_link(); ?></p>
		    <div class="resultadosElementoFecha">
		    	<?php the_category( ' | ', 'single' ); ?>
		    	<p><?php the_date(); ?> <?php the_time(); ?></p>
		    </div>
		</div>
		<div class="datosRedes">
			<!--
			<div class="datosRedesElemento">
				<div class="comments"></div>
				<?php echo get_comments_number(); ?>
			</div>
			-->
			<div class="datosRedesElemento">
				<div class="punchs"></div>
				<p><?php echo $cf['prize'][0];  ?></p> 
			</div>
			<div class="datosRedesElemento twtmb" data-url="<?php echo get_permalink(); ?>" id="<?php echo get_the_ID(); ?>" data-id="<?php echo get_the_ID(); ?>" >
				<div class="twitterC"></div>
				<p>
					0
				</p>
			</div>
			<div class="datosRedesElemento">
				<div class="likes"></div>
				<p><?php fb_like_count(get_permalink()); ?></p>
			</div>
		</div>
	</div>
 	<?php endwhile; else: ?>
		<p class="error_busqueda">Lo sentimos, no se encontró ningún resultado para tu búsqueda. ¡Inténtalo de nuevo!</p>
		<?php endif; ?>
</div>


		<?php  /* Obtenemos los parametros de busqueda */ ?>
		<?php 
			if(is_category()){
				$query = 'category_name='.get_query_var('category_name');
			} elseif (is_author()) {
				$query = 'author_name='.get_query_var('author_name');
			} elseif (is_search()) {
				$query = 's='.get_query_var('s');
			}
			$pages = intval($wp_query->found_posts / 8);
			$is_result = ($wp_query->found_posts % 8);
			if($is_result > 0){
				$pages = $pages;
			}
		?>

		<button data-pages="<?php echo $pages; ?>" data-paged="2" class="verMasResultados" onclick="traer_mas('<?php echo $query; ?>');">Ver más resultados</button>
        <?php get_template_part('general/general', 'footer'); ?>
<?php get_footer(); ?>
