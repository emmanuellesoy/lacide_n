<div class="notaSencillaEtiquetas">
	<header class="listaEtiquetasHeader">ETIQUETAS:</header>
	<p>
		<?php
		$posttags = get_the_tags();
		if ($posttags) {
		  foreach($posttags as $tag) {
		  	if($tag->slug == 'home' || $tag->slug == 'esta-pasando'){ continue; }
		  	?>
		  	<a href="<?php bloginfo('wpurl') ?>/tag/<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a>
		  	<?php
		  }
		}
		?>
	</p>
</div>