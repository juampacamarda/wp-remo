<?php get_header();?>
<main class="site-content">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; ?>
    </div>
</main> <!--fin main-->
<?php get_footer();?> 