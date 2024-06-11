<h2>
	<?php 
	if (is_category() ) {
	   single_cat_title();
	 } 
    elseif (is_tag()) {
    	single_tag_title();
    }
    elseif(is_author()){
    	the_post();
    	echo 'Author Archives:' .get_the_author();
    	rewind_posts();
    }
    elseif(is_day()){
    	echo "Daily Archives:" .get_the_date();
    }
    elseif (is_month()) {
    	echo "Monthly Archives:" .get_the_date("F Y");
    }
    elseif (is_year()) {
    	echo "Yearly Archives:" .get_the_date("Y");
    }
    else{
    	single_cat_title();
    }
	?>
</h2>

<?php 
if (is_search()OR is_archive()) {
     the_excerpt();
 } 
else{
  if ($post->post_excerpt) {
      ?>
<p>
    <?php get_the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>"> Read more&raquo</a>
</p>

<?php
} 
 else{
    the_content();
 }
}
 ?>
 <?php get_sidebar(); ?>
