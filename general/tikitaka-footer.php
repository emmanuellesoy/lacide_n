<div class="footerListas">
	<h4>
		VISITA MÁS SITIOS DE TIKI TAKA SPORTS NETWORK
	</h4>
	<div class="lista">
		<a href="http://www.laciudaddeportiva.com/">
			<div class="imagenCiudadDeportiva"></div>
		</a>
		<p>
			Las mejores historias del deporte
		</p>
		<div class="listaLinea"></div>
		<?php 
			wprss_display_feed_items( $args = array(
				'links_before' => '<ul>',
				'links_after' => '</ul>',
				'link_before' => '<li>',
				'link_after' => '</li>',
				'limit' => '5',
				'source' => '73417'
			));
		?>
	</div>
	<div class="lista listaMedio">
	<a href="http://izquierdazo.com/">
		<div class="imagenIzquierdazo"></div>
	</a>
		<p>
			El mundo del boxeo
		</p>
		<div class="listaLinea">
		</div>
		<?php 
			wprss_display_feed_items( $args = array(
				'links_before' => '<ul>',
				'links_after' => '</ul>',
				'link_before' => '<li>',
				'link_after' => '</li>',
				'limit' => '5',
				'source' => '73426'
			));
		?>
	</div>
	<div class="lista">
	<a href="http://www.pelotapimienta.mx/">
		<div class="imagenPelotaPimienta"></div>
	</a>
		<p>
			Cocinando emociones de béisbol
		</p>
		<a href="http://www.pelotapimienta.mx/">
			<div class="listaLinea"></div>
		</a>
		<?php 
			wprss_display_feed_items( $args = array(
				'links_before' => '<ul>',
				'links_after' => '</ul>',
				'link_before' => '<li>',
				'link_after' => '</li>',
				'limit' => '5',
				'source' => '73447'
			));
		?>
	</div>
	<div class="footerFinal">
		Copyright © 2013 Tiki Taka Sports Network 
	</div>
</div>