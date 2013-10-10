<?php
$premiado = 0;
if ( have_posts() ) : while ( have_posts() ) : the_post();
	$cf = get_post_custom();
	if($cf['imagen_buscador'][0]){ 
		if($imagen)
		{
			if($premiado < $cf['prize'][0])
			{
				$premiado = $cf['prize'][0];
				$imagen = $cf['imagen_buscador'][0];
				$title = get_the_title();
				$premalink = get_permalink();
			}
		}
		else
		{
			$imagen = $cf['imagen_buscador'][0];
			$title = get_the_title();
			$premiado = $cf['prize'][0];
			$premalink = get_permalink();
		}
	}
endwhile; else: endif; ?>
<?php if(isset($imagen)){ ?>
	<header class="buscadorImagen">
		<img src="<?php echo $imagen; ?>" alt="<?php echo $title; ?>">
		<h4 class="buscadorImagenTitulo">
			<a href="<?php echo $permalink; ?>">
				<?php echo $title; ?>
			</a>
		</h4>
	</header>
<?php } ?>