<div class="botones">
	<i class="textoMas" onclick="aumentar_texto();"></i>
	<i class="textoMenos" onclick="reducir_texto();"></i>
	<i class="textoImprimir" onclick="imprimir_texto();"></i>
    <?php $title = cuenta_recorta(get_the_title(get_the_ID())); ?>
    <?php $twitter_url = $title.'+'.urlencode(get_permalink(get_the_ID()).' via @LaCD_Deportiva'); ?>
    <a target="_blank" href="http://twitter.com/home?status=<?php echo $twitter_url ?>" title="Compartelo en Twitter">
		<i class="textoTwitter"></i>
	</a>
	<?php $imagen = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full'); ?>
	<?php $ruta_imagen = $imagen[0]; ?>
    <a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo get_permalink( get_the_ID() ); ?>&p[title]=<?php echo get_the_title(get_the_ID()); ?>&p[summary]=<?php echo (!empty($entrada)) ? $entrada : entradas(the_excerpt(), 1); ?>&p[images][0]=<?php echo $ruta_imagen; ?>" target="_blank" title="Compartelo en Facebook">
		<i class="textoFacebook"></i>
	</a>
</div>