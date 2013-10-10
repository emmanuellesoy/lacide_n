<?php


 /*
 * Corta un texto al encontrar el primer punto
 */

function entradas($cadena = '', $puntos = 1){
    
    $offset = 0;

    for($i = 0; $i < $puntos; $i++){
        
        $pos = strpos($cadena, '.', $offset);
        
        $offset = $pos + 1;
        
    }

}

/*
 * Recorta una cadena hasta 100 caracteres
 */

function cuenta_recorta($str){
        $str_len = strlen($str);
        if($str_len > 120){
            $str = substr($str, 0, 100).'...';
        }
        return $str;
    }


/*
* Esta funcion registra el menu de la cabecera
*/

function register_my_menus() {

    register_nav_menus(

        array( 'header' => __( 'header' ), 'footer' => __( 'footer' ), 'secciones' => __( 'secciones' ) )

    );

}

add_action( 'init', 'register_my_menus' );


    /* Admite thmbnails */
    
    /*
     *  Se activa la opción para la imagen destacada (thumbnails).
     */

    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 728,  728); // default Post Thumbnail dimensions   
    }
    
    if ( function_exists( 'add_image_size' ) ) {
        
        add_image_size( 'primer-cuadro', 1105 );
        
    }
    
    /*
     * Crea los tipos de posts
     */
    
    // Registramos un nuevo tipo de post discos duros
  /*  add_action('init', 'registrar_tipos', 1);
    function registrar_tipos() {
        $labels = array(
            'name' => _x('Web', 'Web Projects'),
            'singular_name' => _x('Web', 'nombre plural'),
            'add_new' => _x('Añadir nuevo', 'Add New Web Project'),
            'add_new_item' => __('Add New Web Project'),
            'edit_item' => __('Edit Web Project'),
            'new_item' => __('New Web Project'),
            'view_item' => __('See Web Project')
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'hierarchical' => false,
            'menu_position' => 5,
            'has_archive' => true,
            'query_var' => true,
            'supports' => array('title','editor','thumbnail'),
            'rewrite' => array('slug' => 'web'),
        );
    }
*/
    /*
     * Añade jQuery al sitio
     */
    
    function my_init() {
	if (!is_admin()) {
                // comment out the next two lines to load the local copy of jQuery
                wp_deregister_script('jquery'); 
                wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js', false, '1.3.2', true); 
                wp_enqueue_script('jquery');
            }
    }
    add_action('init', 'my_init');

/*Trae número de likes en FB*/
function fb_like_count($url) {
    $content = file_get_contents("http://api.ak.facebook.com/restserver.php?v=1.0&method=fql.query&query=select%20url,%20total_count%20from%20link_stat%20where%20url%20in%20('".$url."')&format=xml");
    $fb_like_count = simplexml_load_string($content);
    echo $fb_like_count->link_stat->total_count;
    if(is_bool($fb_like_count)){
        print '0';}
    else{
        echo $fb_like_count;
    }
}

/* Obtiene 8 post */
function traer_mas()
{

    $query = new WP_Query( $_POST['query'] );
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php
        $categories = get_the_category();
        $separator = ' ';
        $output = '';
        if($categories){
            foreach($categories as $category) {
                $output .= str_replace(array('el ', 'destacados'), array('', ''), strtolower($category->cat_name));
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
    <?php endif;
    die();
}

    /*
     * Se inicializan las funciones por defecto
     */

     add_action('wp_ajax_nopriv_traer_mas', 'traer_mas');
     add_action('wp_ajax_traer_mas', 'traer_mas');

     function premiado(){
         
    $meta = get_post_custom($_POST['post_id']);

    $update_prize = $meta['prize'][0] + 1;

    add_post_meta($_POST['post_id'], 'prize', 1, true) or update_post_meta($_POST['post_id'], 'prize', $update_prize);

    $meta = get_post_custom($_POST['post_id']);

    echo $meta['prize'][0];

    //echo 'Gracias';
    
    die();
    
}
 
 /*
 * Se inicializan las funciones por de inicio
 */

 add_action('wp_ajax_nopriv_premialo', 'premiado');
 add_action('wp_ajax_premialo', 'premiado');

//Campos Personalizados para Autor

add_filter('user_contactmethods', 'campos_usuario');

function campos_usuario($user_contactmethods){

    //unset($user_contactmethods['yim']);

    $user_contactmethods['twitter'] = 'Usuario de Twitter';

    return $user_contactmethods;

}

?>
