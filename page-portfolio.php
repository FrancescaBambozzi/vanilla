<?php
/*
  Template Name: Portfolio Page
*/
 ?>

 <?php get_header();?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <h1><?php the_title(); ?></h1>
 	<p>test</p>

		<?php the_content(); ?>


 <?php endwhile; else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>


 <?php get_footer();?>
