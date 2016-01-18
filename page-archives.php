<?php get_header(); ?>

	<div class="archives pagecontainer">
		<div id="navbaranchor"></div>
		<div class="archiveshead">
			<h1>NEWSLETTER ARCHIVES</h1>
		</div>

		<div class="archivesbody">
			<ul class="archivesbodycontent">
				<?php // Example posts loop begins here. For displaying posts from any category on any page.
						$examplePosts = new WP_Query('cat=17&posts_per_page=3&orderby=date&order=DESC');


						if ($examplePosts->have_posts()) {
							while ($examplePosts->have_posts()): 
								$examplePosts->the_post(); ?>
								<li class="archivepost"><a href="<?php the_permalink(); ?>">&raquo;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_title();?></a></li>
								<?php 
								endwhile;
								
					} else {
							echo '<p>No content found</p>';
						} 
						// reset data. Gives back control to WP.

						wp_reset_postdata(); ?>


			</ul>

		</div>
		
		
	</div>


	


		


<?php get_footer(); ?> 