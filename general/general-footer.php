<secciones class="pieLCD">
	<div class="pieLCDColumna">
		<?php get_search_form(); ?>
		<img src="<?php bloginfo('template_url'); ?>/img/logoFt.png">
		<p>
			Copyright &#169; 2010 <br>
			La ciudad deportiva, capital de pasiones. <br> 
			Todos los derechos reservados.
		</p>
	</div>
	<div class="pieLCDColumna">
		<h2>Secciones</h2>
		<?php
        /*
         * Se crea el menú para el header
         */
        $defaults = array(
        	'menu' => 'secciones',
        	'container' => 'nav',
        	'container_class' => 'secciones-nav',
        	'container_id' => 'secciones-nav',
        	'menu_class' => '',
        	'menu_id' => '',
        	'echo' => true,
        	'fallback_cb' => 'wp_page_menu',
        	'before' => '',
        	'after' => '',
        	'link_before' => '',
        	'link_after' => '',
        	'items_wrap' => '<ul class="list-nav">%3$s</ul>',
        	'depth' => 0,
        	'walker' => ''
    	);
        wp_nav_menu(    $defaults   );
    ?>
	</div>
	<div class="pieLCDColumna">
		<h2>Nosotros</h2>
		<?php
        /*
         * Se crea el menú para el header
         */
        $defaults = array(
        	'menu' => 'footer',
        	'container' => 'nav',
        	'container_class' => 'secciones-nav',
        	'container_id' => 'secciones-nav',
        	'menu_class' => '',
        	'menu_id' => '',
        	'echo' => true,
        	'fallback_cb' => 'wp_page_menu',
        	'before' => '',
        	'after' => '',
        	'link_before' => '',
        	'link_after' => '',
        	'items_wrap' => '<ul class="list-nav">%3$s</ul>',
        	'depth' => 0,
        	'walker' => ''
    	);
        wp_nav_menu(    $defaults   );
        ?>
	</div>
	<div class="pieLCDColumna">
		<h2>Redes</h2>
		<ul>
			<li>
				<a href="https://twitter.com/lacd_deportiva" target="_blank"><div class="redesSociales redesSocialesT"></div> @LaCD_Deportiva</a>
			</li>
			<li>
				<a href="https://www.facebook.com/laciudaddeportiva" target="_blank"><div class="redesSociales redesSocialesF"></div>/laciudaddeportiva</a>
			</li>
			<li>
				<a href="http://www.youtube.com/LaCiudadDeportiva" target="_blank"><div class="redesSociales redesSocialesY"></div>/LaCiudadDeportiva</a>
			</li>
			<li>
				<a href="https://plus.google.com/105160597461041788440/posts" target="_blank" rel="publisher"><div class="redesSociales redesSocialesG"></div>CD_Deportiva</a>
			</li>
		</ul>
	</div>
</secciones>