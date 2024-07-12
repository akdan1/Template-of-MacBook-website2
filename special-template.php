<?php 

/*
Template Name: Special Layout
*/
get_header();

if (have_posts()) :
while(have_posts()): the_post();?>

  <article class="post page">
  	<p> <?php the_content(); ?></p>
  </article>

   <?php endwhile;
else :
	echo "<p>No content found</p>";
endif;

get_footer();
?>
