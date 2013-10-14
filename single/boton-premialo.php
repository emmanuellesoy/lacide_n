<div class="numeroHits" id="hit-<?php echo get_the_ID(); ?>" data-premio="f" onclick="premiar(<?php echo get_the_ID(); ?>);">
    <?php $meta = get_post_custom(); ?>
    <p><?php echo ($meta['prize'][0]) ? $meta['prize'][0] : 0; ?></p>
</div>
<div class="redesShare">
    <?php $title = cuenta_recorta(get_the_title(get_the_ID())); ?>
    <?php $twitter_url = $title.'+'.urlencode(get_permalink(get_the_ID()).' via @LaCD_Deportiva'); ?>
    <a class="left-sidebar-share-floating-icon twitter" target="_blank" href="http://twitter.com/home?status=<?php echo $twitter_url ?>" title="Compartelo en Twitter">
		<i class="shareTW"></i>
	</a>
	<?php $imagen = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full'); ?>
	<?php $ruta_imagen = $imagen[0]; ?>
    <a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo get_permalink( get_the_ID() ); ?>&p[title]=<?php echo get_the_title(get_the_ID()); ?>&p[summary]=<?php echo (!empty($entrada)) ? $entrada : entradas(the_excerpt(), 1); ?>&p[images][0]=<?php echo $ruta_imagen; ?>" target="_blank" title="Compartelo en Facebook">
		<i class="shareFB"></i>
	</a>
	<a href="https://plus.google.com/share?url={<?php echo $twitter_url;  ?>}" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
  		<i class="shareGP"></i>
	</a>
</div>