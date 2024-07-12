<?php 
get_header();

if (have_posts()) {
	while(have_posts()){
		the_post();
?>
	<article class="post">
	
	<h2>
		<a href="<?php the_permalink();  ?>">
			<?php the_title(); ?>
		</a>
</h2>

<p class="post-info">
	<?php the_time("F j, Y g:i a"); ?>

| by
<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">
	<?php the_author();?>
</a>
| posted in
<?php 
$categories = get_the_category();
foreach ($categories as $key => $value) {
 	$link = get_category_link($value->term_id);
 	echo "<a href='$link'>".$value->name."</a>";
 } 
 ?>
</p>

	<hr>
	<p><?php the_content(); ?></p>
</article>

<?php

	theAuthorLastThreePosts();
	}
}
else{
	echo "<p>no content found</p>";
}

get_footer();

?>

