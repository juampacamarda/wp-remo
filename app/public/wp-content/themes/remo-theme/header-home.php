<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/ef7428ba99.js" crossorigin="anonymous"></script>-->
    <?php wp_head(); ?>
    <title>Deli Box Tienda on-line</title>
    <meta name="Title" content="Deli Box">
    <meta name="keywords" content="">
    <script>
        
    </script>
</head>

<body <?php body_class() ?>>
<div class="site-container">
    <header>
        <div class="topbar d-none d-md-block">
            <div class="row d-flex align-items-center justify-content-between"> 

                <div class="col-xs-12 col-sm-3 d-md-none d-lg-block col-md-3">
                    <div class="navbar-brand">
                        
                            <a class="home-link-lg d-none d-lg-block" href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-h2a.svg" alt="Logo" class="img-fluid">
                            </a>
                       
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-lg-8 justify-content-end datos_right">
                    <ul class="nav hidden-xs hidden-sm" id="tabla-navdatos">
                        <li>
                            <?php $link = get_field( 'link-header-', 'option' ); ?>
                            <?php if ( $link ) : ?>
                                <a class="btn btn-contacto" href="<?php echo esc_url( $link) ; ?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Zonas de Entrega</a>
                            <?php endif; ?>
                        </li>
                        <li class="telefonos border-data padding-datos">
                            <!--<h3 class="title-datos cursiva">Tel&eacute;fonos</h3>-->
                            <ul class="nav data-datos header-tel">
                                <li>5411 4582 2005 &nbsp;</li>
                                <li>/ 0800 333 3183</li>
                            </ul>
                        </li>
                        <li class="redes border-r padding-datos">
                            <!--<h3 class="title-datos cursiva">Nuestras redes</h3>-->
                            <ul class="nav data-datos header-redes">
                                <li>
                                    <a href="https://www.facebook.com/HaedoCatering" target="_blank">
                                        <i class="fab fa-facebook-square fa-2" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <!--<li>
                                    <a>
                                        <i class="fab fa-yelp fa-2" aria-hidden="true"></i>
                                    </a>
                                </li>-->
                                <li>
                                    <a href=" https://www.instagram.com/haedocatering_delibox/" target="_blank">
                                        <i class="fab fa-instagram fa-2" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://bit.ly/DeliBoProductos2018" target="_blank">
                                        <i class="fab fa-youtube fa-2" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="carrito-compras">
                            <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
                                $count = WC()->cart->cart_contents_count;
                                ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                                <?php 
                                if ( $count > 0 ) {
                                    ?>
                                    <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                                    <?php
                                }
                                    ?></a>
                            
                            <?php } ?>
                        </li>
                    </ul>   
                </div>
                
                
            </div>
        </div>
        <nav id="menu-theme" class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <a href="<?php echo get_home_url(); ?>" class="home-link-xs d-block d-lg-none" rel="home">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-h2.svg" alt="Logo-Aranguren" class="img-fluid">
                        </a>
                        <a href="<?php echo get_home_url(); ?>" class="home-link-fix d-block d-lg-none" rel="home">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-h2.svg" alt="Logo-Aranguren" class="img-fluid">
                        </a>
                    </div>
                
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <div class="row">
                            
                        
                            <!--menu dinamico-->
                            <?php wp_nav_menu(array(
                            'theme_location' => 'superior',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container' =>'div',
                            'container_class' => 'collapse navbar-collapse justify-content-center',
                            'container_id' => 'navbarTogglerDemo02',
                            'menu_class' => 'navbar-nav mt-2 mt-lg-0',
                            'fallback_cb'  => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' =>  new WP_Bootstrap_Navwalker(),
                            ) ); ?>
                            <!--menu dinamico-->

                        </div>
                        
                    </div>
                </div>
           
        </nav>
    </header>
<!--FIN HEADER EMPIEZA CONTENIDO-->