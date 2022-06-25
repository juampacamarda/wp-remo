<?php
/*
Template Name: page-plantilla
*/
?>
<?php get_header();?>
<main class="site-content">
   
        <?php if ( get_field( 'imagen_portada') ) { ?>
            <div class="heading d-flex align-items-center" style="background-position: bottom;background-image:url('<?php the_field( 'imagen_portada' ); ?>'); background-size:cover; background-repeat:no-repeat">
                <div class="container">
                    <h2 class="tittle cursiva" data-aos="fade-up" > <?php the_field( 'titulo' ); ?> </h2>
                </div>
            </div>
        <?php } ?>
    <div class="contenido py-4">

    
    <?php $imagen_contenido = get_field( 'imagen-contenido' ); ?>
    <?php if ( $imagen_contenido ) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-5" data-aos="fade-up">
                    <img src="<?php echo esc_url( $imagen_contenido['url'] ); ?>" alt="<?php echo esc_attr( $imagen_contenido['alt'] ); ?>" class="img-fluid d-block" />
                </div>
                <div class="col-md-7">
                    <div class="content-page" data-aos="fade-up">
                        <div class="texto-post d-flex flex-column">
                            <?php if( get_field( 'titulo_txt' )) { ?>
                                <h4 class="mb-4"><?php the_field( 'titulo_txt' ); ?></h4>
                            <?php } ?>
                            <div class="cuerpo mb-4">
                                <?php the_field( 'texto_contenido' ); ?>
                            </div>
                            <?php $button = get_field( 'button' ); ?>
                            <?php if ( $button ) : ?>
                                <a class="btn btn-contacto mt-auto ml-auto" href="<?php echo esc_url( $button) ; ?>">Contactanos</a>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container">
            <div class="content-page  d-flex flex-column">
                <?php if( get_field( 'titulo_txt' )) { ?>
                <h4><?php the_field( 'titulo_txt' ); ?></h4>
                <?php } ?>
                <div class="texto-post"><?php the_field( 'texto_contenido' ); ?></div>
                <?php $button = get_field( 'button' ); ?>
                <?php if ( $button ) : ?>
                    <a class="btn btn-contacto mt-auto ml-auto" href="<?php echo esc_url( $button) ; ?>">Contactanos -></a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    </div>
    
    
    
</main> <!--fin main-->
<?php get_footer();?> 