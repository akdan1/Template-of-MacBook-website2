<article class="post <?php if(has_post_thumbnail()) { echo "has-thumbnail";} ?>">
	
	<div class="post-thumbnail">
		<?php the_post_thumbnail('small-thumbnail'); ?>
	</div>
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
<?php if (!is_page()) { ?>
<p> <?php the_excerpt(); ?></p>
<?php } else {
	the_content();
} ?>
	<hr>
</article>

