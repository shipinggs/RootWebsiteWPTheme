<?php get_header(); ?>


<?php if (have_posts()) {
	while (have_posts()): the_post(); ?>

	<?php
	echo get_the_content();


	endwhile;
	} else {
	echo '<p>No content found</p>';
} ?>


<?php get_footer(); ?> 