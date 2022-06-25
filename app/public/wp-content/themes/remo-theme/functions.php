<?php
/*Este código muestra los estilos que aplicamos en el archivo custom-login-styles.css dentro de la carpeta login*/
function custom_login() {
  wp_enqueue_style( 'custom-login-css', get_stylesheet_directory_uri() . '/login/custom-login-styles.css', array(), '1.0' );
}
add_action( 'login_head', 'custom_login' );
function custom_url_login() {
	return 'https://liebre.online/'; // Ponemos la web que queramos.
}
add_filter( 'login_headerurl', 'custom_url_login' );

//custom logo
function mytheme_setup() {
    add_theme_support('custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );}

 
add_action('after_setup_theme', 'mytheme_setup');
//cambiar la clase del logo
add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'home-link-lg d-none d-lg-block', $html );
	$html = str_replace( 'custom-logo', 'img-fluid',  $html );

    return $html;
}
add_filter( 'get_custom_logo', function( $html, $blog_id ) {
    $html = str_replace( 'itemprop="logo"', 'itemprop="logo" title="Vita Salud Empresa de Servicios de Ortopedia y Rehabilitación
    Alquiler y Venta de Artículos Ortopédicos"', $html );
    return $html;
 }, 10, 2 );
//nav menu and thumbnails
if (function_exists('register_nav_menus')){
	register_nav_menus (array('superior'=>'Menu Principal Superior'));
	register_nav_menus (array('wootienda'=>'menu tienda'));
	register_nav_menus (array('footer'=>'Menu footer b'));

}
function add_link_atts($atts) {
$atts['class'] = "nav-link";
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');
//navlink
if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support( 'post-thumbnails' );
}
//mostrar barra admin
if (is_user_logged_in()) {
    show_admin_bar(true);
}#end if
//abajo carga shortcodes
// Adding Shortcodes to the_excerpt() function
add_filter('the_excerpt', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');
add_filter('acf/format_value', 'do_shortcode');
// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');
//abajo carga estilos
function theme_scripts(){
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() .'/assets/css/base-style.css');
    wp_enqueue_style('theme-wc', get_stylesheet_directory_uri() .'/assets/css/woocommerce-edit.css');
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'owl', get_stylesheet_directory_uri() .'/assets/owlcarousel/owl.carousel.min.css' );
    wp_enqueue_style( 'owltheme', get_stylesheet_directory_uri() .'/assets/owlcarousel/owl.carousel.min.css' );
    wp_enqueue_style('animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css');
    wp_enqueue_style('aoscss', 'https://unpkg.com/aos@next/dist/aos.css');
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js' );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
    wp_enqueue_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' );
    wp_enqueue_script( 'prefix-font-awesome', 'https://kit.fontawesome.com/ef7428ba99.js' );
    wp_enqueue_script('theme-js', get_stylesheet_directory_uri() .'/assets/js/theme-consultar.js');
    wp_enqueue_script('owljs', get_stylesheet_directory_uri().'/assets/owlcarousel/owl.carousel.min.js');
    wp_enqueue_script('aosjs', 'https://unpkg.com/aos@next/dist/aos.js');

}
add_action('wp_enqueue_scripts','theme_scripts');
//subir svg
function custom_mimes( $mimes = array() ) {
	// New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'custom_mimes' );
//fin subir svg
//woocomerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main"><div class="container py-3">';
}

function my_theme_wrapper_end() {
    echo '</div></section>';
}

function plantilla_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => '',
        'single_image_width'    => '',

        'product_grid'          => array(
            'default_rows'    => 4,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
    // Single Product Gallery Addons
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );   
}
add_action( 'after_setup_theme', 'plantilla_add_woocommerce_support');

function dcms_agregar_nueva_zona_widgets() {

    register_sidebar( array(
        'name'          => 'widget-woocommerce',
        'id'            => 'id-nueva-zona',
        'description'   => 'Descripción de la nueva Zona de Widgets',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    
    }
add_action( 'widgets_init', 'dcms_agregar_nueva_zona_widgets' );

function relacionados(){
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
    add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products' );
 }
 add_action( 'woocommerce_before_main_content', 'relacionados' );

 /* ACF */
 if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


/* widget buscador header */
function widget_buscador() {
    register_sidebar( array(
    'name' => 'Nueva Zona Widget',
    'id' => 'zonabuscador',
    'description' => 'Descripción de la nueva Zona de Widgets',
    'before_widget' => '<div class="widget-class">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
    ) );
    }
	add_action( 'widgets_init', 'widget_buscador' );
	
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
//agregar iconito carro
/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

add_action( 'woocommerce_before_shop_loop_item_title', function() {
   global $product;
   if ( !$product->is_in_stock() ) {
       echo '<span class="now_sold">AGOTADO</span>';
   }
});
/*solo productos en la busqueda*/
//Only show products in the front-end search results
function lw_search_filter_pages($query) {
    if ($query->is_search) {
        $query->set('post_type', 'product');
        $query->set( 'wc_query', 'product_query' );
    }
    return $query;
}
 
add_filter('pre_get_posts','lw_search_filter_pages');
/* funcion formulario de productos */
function formulario_productos(){
    echo get_template_part( './contactoproductos' );
}
/*function aviso_tienda(){
    echo get_template_part( './woocommerce/aviso-tienda' );
}*/
/* formulario de productos */
/* agregar formulario de productos */
add_action( 'woocommerce_after_single_product_summary', 'formulario_productos', 16 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action ( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
//add_action( 'woocommerce_before_cart_totals', 'aviso_tienda' );

/*add_filter('woocommerce_states', 'lista_provincias');

function lista_provincias( $provincias ) {

$provincias ['AR'] = array(

'C' => 'Ciudad Autónoma de Buenos Aires',

); //CODIGO Y NOMBRES DE PROVINCIAS DISPONIBLES

return $provincias;

}*/
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

/**

 * Cambiar el número de columnas

 */

add_filter('loop_shop_columns', 'loop_columns', 999);

if (!function_exists('loop_columns')) {

 function loop_columns() {

 return 3; // 3 productos por columna

 }

}