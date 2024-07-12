<?php 
get_header();
?>

<div class="site-content clearfix">
	<div class="main-column"> 
		<?php if (have_posts()) {
	while(have_posts()){
		the_post();

	get_template_part('content');
?>

<?php
	}
}
else{
	echo "<p>no content found</p>";
}
 ?>
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
 ?>
