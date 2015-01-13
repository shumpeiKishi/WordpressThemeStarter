<?php get_header(); ?>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		<article class="article">
			<h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="article-body"><?php the_content(); ?></div>
		</article>
		<?php
	} // end while
} // end if
?>
<?php get_footer(); ?>