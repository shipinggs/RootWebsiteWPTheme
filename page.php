<?php get_header(); ?>

	<div class="site-content">
		<?php if (have_posts()) {
			while (have_posts()): the_post(); ?>
			
				<h2><?php the_title(); ?> </h2>
				<?php
				the_content();

			
			endwhile;
		} else {
				echo '<p>No content found</p>';
			} ?>

	</div>
	


<?php get_footer(); ?> 