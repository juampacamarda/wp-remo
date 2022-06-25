<!--FIN CONTENIDO EMPIEZA FOOTER-->
<footer>
		
		<div class="container-fluid">
			
				<div id="datafooter" class="row">
						
								

								<div class="col-12 col-md-4 text-center">
										<!--<ul class="redes nav d-flex justify-content-center">
												<?php if ( get_field( 'facebook_link', 'option') ) { ?>
														<li>
																<?php $facebook_link = get_field( 'facebook_link', 'option' ); ?>
																<?php if ( $facebook_link ) { ?>
																		<a href="<?php echo $facebook_link; ?>">
																				<i class="fab fa-facebook-f"></i>
																		</a>
																<?php  } ?>
														</li>
												<?php } ?>
												<?php if ( get_field( 'twitter_link', 'option') ) { ?>
														<li>
																<?php $twitter_link = get_field( 'twitter_link', 'option' ); ?>
																<?php if ( $twitter_link ) { ?>
																		<a href="<?php echo $twitter_link; ?>">
																				<i class="fab fa-youtube"></i>
																		</a>
																<?php } ?>
														</li>
												<?php } ?>
												<?php if ( get_field( 'instagram_link', 'option') ) { ?>
														<li>
																<?php $instagram_link= get_field( 'instagram_link', 'option' ); ?>
																<?php if ( $instagram_link ) { ?>
																		<a href="<?php echo $instagram_link; ?>">
																				<i class="fab fa-instagram"></i>
																		</a>
																<?php } ?>
														</li>
												<?php } ?>
												<?php if ( get_field( 'wsp_link', 'option') ) { ?>
														<li>
																<?php $wsp_link= get_field( 'wsp_link', 'option' ); ?>
																<?php if ( $wsp_link ) { ?>
																		<a href="<?php echo $wsp_link; ?>">
																				<i class="fab fa-whatsapp"></i>
																		</a>
																<?php } ?>
														</li>
												<?php } ?>
										
												
										
										</ul>-->
										<div id="mennu-footer">
												<nav class="navbar">
														<!--menu dinamico-->
														<?php  wp_nav_menu(array(
														'theme_location' => 'footer',
														'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
														'container' =>'div',
														'container_class' => 'menu',
														'container_id' => 'footermenu',
														'menu_class' => 'navbar-nav mt-lg-0',
														'fallback_cb'  => 'WP_Bootstrap_Navwalker::fallback',
														'walker' =>  new WP_Bootstrap_Navwalker(),
														) ); ?>
														<!--menu dinamico-->
												</nav>
										</div>
								</div>

								<div class="col-xs-12 col-md-4 ">
									<h5 class="mt-2 text-center">Ultimas Notas</h5>
									<ul class="notas">
										<?php get_template_part( 'home/post-footer' ); ?>
									</ul>
								</div>
								<div class="col-12 col-md-4 align-items-md-center text-center text-md-left">
										<div class="logo-ftr">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" class="d-block mx-auto img-fluid">
										</div>
										<p class="text-center">
												<?php if ( get_field( 'footer_titulo_01','option' ) ) {?>
														<?php the_field( 'footer_titulo_01','option' ); ?><br>
												<?php }else{ ?>
														<?php echo get_bloginfo( 'name' ) ?><br>
												<?php } ?>
												<?php if ( get_field( 'direccion','option' ) ) {?>
														<?php the_field( 'direccion','option' ); ?><br>
												<?php } ?> 
												<?php if ( get_field( 'telefonos','option' ) ) {?>
														<?php the_field( 'telefonos','option' ); ?><br>
												<?php } ?>
												<?php if ( get_field( 'correo','option' ) ) {?>
														<?php the_field( 'correo','option' ); ?>
												<?php }else{ ?>
														E-mail: xxxxx@xxxxx - xxxxx@xxxxx
												<?php } ?>

										</p>                    
								</div>

				
		</div>
		
		</footer>
		<div class="footer-2">
				<div class="container-fluid wrapper_consultar">
						<div class="container d-flex justify-content-end">
								<div class="col-sm-4">
										<div class="consultar"> 
												<a href="#" title="" target="_blank" data-toggle="tooltip" data-placement="top" data-container="body" data-original-title="Remo"> <small>powered by Remo</small> </a>
										</div>
								</div>
						</div>
				</div>
		</div>
		<?php wp_footer(); ?>
</div>
