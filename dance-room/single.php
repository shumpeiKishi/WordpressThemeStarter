<?php get_header(); ?>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		
		// Contents here
		the_content(); 
		?>
		

		<?php
	} // end while
} // end if
?>
<?php get_footer(); ?>