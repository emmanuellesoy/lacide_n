<header id="main_header" class="encabezado-principal">
    <a href="<?php bloginfo('wpurl'); ?>" title="La Ciudad Deportiva | Capital de Pasiones">
        <img src="<?php bloginfo('template_url'); ?>/img/webcdlogo.png" alt="La Ciudad Deportiva" title="La Ciudad Deportiva" height="166" width="167" />
    </a>
    <hgroup>
        <h1>
            <a href="<?php bloginfo('wpurl'); ?>" title="La Ciudad Deportiva | Capital de Pasiones">
                La Ciudad Deportiva
            </a>
        </h1>
    </hgroup>
    <?php
        /*
         * Se crea el menú para el header
         */
        $defaults = array(  'menu'            => 'header',  'container'       => 'nav', 'container_class' => 'header-nav',  'container_id'    => 'header-nav',    'menu_class'      => '',    'menu_id'         => '',    'echo'            => true,  'fallback_cb'     => 'wp_page_menu',    'before'          => '',    'after'           => '',    'link_before'     => '',    'link_after'      => '',    'items_wrap'      => '<ul class="list-nav">%3$s</ul>',  'depth'           => 0, 'walker'          => '' );
        wp_nav_menu(    $defaults   );
    ?>
    <section class="encabezado-principal-rs">
        <a class="encabezado-principal-rs-twitter" href="https://twitter.com/lacd_deportiva" target="_blank" title="Siguenos en Twitter"></a>
        <a class="encabezado-principal-rs-facebook" href="https://www.facebook.com/laciudaddeportiva" target="_blank" title="Conoce nuestro Fanpage en Facebook"></a>
        <a class="encabezado-principal-rs-google" href="https://plus.google.com/105160597461041788440/posts?hl=es-419" target="_blank" title="Sumanos 1 en Google+"></a>
        <a class="encabezado-principal-rs-youtube" href="http://www.youtube.com/channel/UCGs5gowZMjiilb5OYjKYnpQ" target="_blank" title="Mira nuestros video en Youtube"></a>
        <a class="encabezado-principal-rs-rss" href="<?php bloginfo('wpurl'); ?>/feed" target="_blank" title="Suscribete en nuestro RSS"></a>
    </section>
</header>