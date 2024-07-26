
<?php 
/*
Template Name: page no title 
*/

get_header(); ?>

   <?php if(have_posts() ):
      while(have_posts() ): the_post(); ?>

     <h1> This Is My Static Title</h1>
     <small>Posted On: <?php the_time('F j,Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
      <p><?php the_content(); ?></p>
      
      <hr>
   <?php endwhile;
endif;
   ?>
<?php get_footer(); ?>