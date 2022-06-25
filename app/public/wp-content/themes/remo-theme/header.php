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
		<title><?php echo get_bloginfo( 'name' ); ?></title>
		<meta name="Title" content="Deli Box">
		<?php if ( get_field( 'google_analytics', 'option') ) { ?>
			<?php the_field( 'google_analytics','option' ); ?>
		<?php } ?>
		<?php if ( get_field( 'fb_pix', 'option') ) { ?>
			<?php the_field( 'fb_pix','option' ); ?>
		<?php } ?>
		<?php if ( get_field( 'otro_code', 'option') ) { ?>
			<?php the_field( 'otro_code','option' ); ?>
		<?php } ?>
</head>

<body <?php body_class() ?>>
<div class="site-container">
		<header>
				<div class="container-fluid">
						<div class="topbar d-none d-md-block">
								<div class="row d-flex align-items-top justify-content-between"> 

										<div class="col-xs-12 col-sm-5 col-md-5 d-flex align-items-center">
												<!--<div class="navbar-brand">
														<?php
																// Display the Custom Logo
																the_custom_logo();

																// No Custom Logo, just display the site's name
																if (!has_custom_logo()) {
																		?>
																<a href="<?php bloginfo('url'); ?>">
																<h1><?php echo get_bloginfo( 'name' ); ?></h1> </a>
														<?php
																}?>
												</div>-->
												
										</div>

										<div class="col-xs-5 col-sm-5 col-lg-6 justify-content-end datos_right">
												<ul class="nav hidden-xs hidden-sm" id="tabla-navdatos">
														<!--<li class="telefonos d-none border-data padding-datos">-->
																<!--<h3 class="title-datos">Tel&eacute;fonos</h3>-->
																<!--<ul class="nav data-datos header-tel">
																		<li class="mx-2"><a href="tel:0351152281251"><i class="fa fa-mobile-alt"></i> <span>MARTIN</span></a></li>
																		<li class="mx-2"><a href="tel:0351155381953"><i class="fa fa-mobile-alt"></i> <span>SOLEDAD</span></a></li>
																</ul>
														</li>-->
														<li class="redes border-r padding-datos">
																<!--<<h3 class="title-datos">Nuestras redes</h3>-->
																<ul class="nav data-datos header-redes">
																		<li>
																				<a href="https://instagram.com/sobol.wines" target="_blank"><i class="fab fa-instagram"></i></a>
																		</li>
																		<li>
																				<a href="https://fb.com/SobolWines20" target="_blank"><i class="fab fa-facebook"></i></a>
																		</li>
																		<li>
																				<a href="tel:5491166477691"><i class="fa fa-phone"></i></a>
																		</li>
																		<li>
																				<a href="https://wa.me/5491166477668"><i class="fab fa-whatsapp"></i></a>
																		</li>
																		<li>
																				<a href="https://sobolwines.com/contacto/"><i class="fa fa-envelope"></i></a>
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
				</div>

				<nav id="menu-theme" class="navbar navbar-expand-lg navbar-dark">
								<div class="container-fluid">
										<div class="navbar-brand">
												<a href="<?php echo get_home_url(); ?>" class="home-link-xs d-block" rel="home">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" class="img-fluid">
												</a>
												<!--
													<a href="<?php// echo get_home_url(); ?>" class="home-link-fix d-block d-lg-none" rel="home">
															<img src="<?php //echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" class="img-fluid">
													</a>
												-->
										</div>
								
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
										aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
												<span class="navbar-toggler-icon"></span>
										</button>
										<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
												
														
												
														<!--menu dinamico-->
														<?php wp_nav_menu(array(
														'theme_location' => 'superior',
														'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
														'container' =>'div',
														'container_class' => 'collapse navbar-collapse',
														'container_id' => 'navbarTogglerDemo02',
														'menu_class' => 'navbar-nav mt-2 mt-lg-0',
														'fallback_cb'  => 'WP_Bootstrap_Navwalker::fallback',
														'walker' =>  new WP_Bootstrap_Navwalker(),
														) ); ?>
														<!--menu dinamico-->
														<?php if ( is_active_sidebar( 'zonabuscador' ) ) : ?>
														<div id="zonabuscador" class="d-block d-md-none wc-search">
																<?php dynamic_sidebar( 'zonabuscador' ); ?>
														</div>
														<?php endif; ?>

												
												
										</div>
										<?php if ( is_active_sidebar( 'zonabuscador' ) ) : ?>
										<div id="zonabuscador" class="d-none d-md-block wc-search">
												<?php dynamic_sidebar( 'zonabuscador' ); ?>
										</div>
										<?php endif; ?>
								</div>
				</nav>
				
		</header>
<!--FIN HEADER EMPIEZA CONTENIDO-->