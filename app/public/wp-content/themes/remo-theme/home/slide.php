<?php if ( get_field( 'imagen_01') ) { ?>
<section id="home-carousel" class="d-lg-block">      
		<div id="slide-home" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators d-none">
						<li data-target="#slide-home" data-slide-to="0" class="active"></li>
						<li data-target="#slide-home" data-slide-to="1"></li>
						<li data-target="#slide-home" data-slide-to="2"></li>
						
				</ol>
				<div class="carousel-inner">
						<?php $link_slide_1 = get_field( 'link_slide_1' ); ?>  
								<a class="carousel-item active" href="<?php echo esc_url( $link_slide_1) ; ?>">
										<div  style="background-image:url('<?php the_field( 'imagen_01' ); ?>'); background-size:cover;background-repeat:no-repeat;height: 100vh;">
												
														<!--<img src="<?//php the_field( 'imagen_01' ); ?>" class="d-block w-100" />
												
												<img src="<//?php echo get_template_directory_uri(); ?>/assets/img/slide/SILDE-01.jpg" class="d-block w-100">
												<div class="carousel-caption d-none d-md-block">
														<p>Alquiler y venta de elementos de ortopedia, rehabilitación e internación domiciliaria.</p>
														<img src="<//?php echo get_template_directory_uri(); ?>/assets/img/slide/LOGITOS.png" alt="">
												</div>-->
												<div class="content-slide">
													<h1 class="animated bounceInUp slow">
														<?php the_field( 'texto_slide_01' ); ?>
													</h1>
												</div>
												
												<div class="overlay d-none"></div>
										</div>
								</a>
					
						<?php if ( get_field( 'imagen_2') ) { ?>
								<?php $link_slide_2 = get_field( 'link_slide_2' ); ?>  
										<a class="carousel-item" href="<?php echo esc_url( $link_slide_2) ; ?>">

												<div  style="background-image:url('<?php the_field( 'imagen_2' ); ?>'); background-size:cover;background-repeat:no-repeat;height: 100vh;">
														
																<!--  <img src="<//?php the_field( 'imagen_2' ); ?>" class="d-block w-100" />
												
																<img src="<//?php echo get_template_directory_uri(); ?>/assets/img/slide/SILDE-02.jpg" class="d-block w-100" >
																<div class="carousel-caption d-none d-md-block">
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														</div>-->
														<div class="content-slide">
													<h1 class="animated bounceInUp slow">
														<?php the_field( 'texto_slide_2' ); ?>
													</h1>
												</div>
														<div class="overlay d-none"></div>
												</div>

										</a>
						<?php } ?>
						<?php if ( get_field( 'imagen_3') ) { ?>
								<?php $link_slide_3 = get_field( 'link_slide_3' ); ?>  
										
										<a class="carousel-item" href="<?php echo esc_url( $link_slide_3) ; ?>">

												<div  style="background-image:url('<?php the_field( 'imagen_3' ); ?>'); background-size:cover;background-repeat:no-repeat;height: 100vh;">
														
														<!--  <img src="<//?php the_field( 'imagen_3' ); ?>" class="d-block w-100" />
												
														<!-- <img src="<//?php echo get_template_directory_uri(); ?>/assets/img/slide/SILDE-02.jpg" class="d-block w-100" >
																<div class="carousel-caption d-none d-md-block">
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														</div>-->
														<div class="content-slide">
															<h1 class="animated bounceInUp slow">
																<?php the_field( 'texto_slide_3' ); ?>
															</h1>
														</div>
														<div class="overlay d-none"></div>
												</div>

										</a>

						<?php } ?>
						<?php if ( get_field( 'imagen_4') ) { ?>
						<?php $link_slide_4 = get_field( 'link_slide_4' ); ?>  
				 						
										<a class="carousel-item" href="<?php echo esc_url( $link_slide_4) ; ?>">
												<div  style="background-image:url('<?php the_field( 'imagen_4' ); ?>'); background-size:cover;background-repeat:no-repeat;height: 100vh;">
														
																<!-- <img src="<//?php the_field( 'imagen_4' ); ?>" class="d-block w-100" />
												
																<img src="<//?php echo get_template_directory_uri(); ?>/assets/img/slide/SILDE-02.jpg" class="d-block w-100" >
																<div class="carousel-caption d-none d-md-block">
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														</div>-->
														<div class="content-slide">
															<h1 class="animated bounceInUp slow">
																<?php the_field( 'texto_slide_4' ); ?>
															</h1>
														</div>
														<div class="overlay d-none"></div>
												</div>
										</a>

						<?php } ?>
						<?php if ( get_field( 'imagen_5') ) { ?>
						<?php $link_slide_5 = get_field( 'link_slide_5' ); ?>  
				 						
								<a class="carousel-item" href="<?php echo esc_url( $link_slide_5) ; ?>">
										<div  style="background-image:url('<?php the_field( 'imagen_5' ); ?>'); background-size:cover;background-repeat:no-repeat;height: 100vh;">
												
														<!--  <img src="<//?php the_field( 'imagen_5' ); ?>" class="d-block w-100" />
										
														<img src="<//?php echo get_template_directory_uri(); ?>/assets/img/slide/SILDE-02.jpg" class="d-block w-100" >
														<div class="carousel-caption d-none d-md-block">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</div>-->
												<div class="content-slide">
													<h1 class="animated bounceInUp slow">
														<?php the_field( 'texto_slide_5' ); ?>
													</h1>
												</div>
												<div class="overlay d-none"></div>
										</div>
								</a>
						<?php } ?>
				</div>
				<a class="carousel-control-prev" href="#slide-home" role="button" data-slide="prev">
						<span aria-hidden="true">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/control-prev.png" alt="">
						</span>
								<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#slide-home" role="button" data-slide="next">
						<span aria-hidden="true">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/control-next.png" alt="">
						</span>
						<span class="sr-only">Next</span>
				</a>
		</div>
</section>
<?php } ?>
<a href="#suscripcion-news" class="btn btn-down"><i class="fas fa-arrow-alt-circle-down"></i></a>
<!--fin Carousel-->