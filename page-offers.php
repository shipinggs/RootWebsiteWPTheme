<?php get_header(); ?>

	<div class="offers tldrsegment">
		<div class="offershead tldrsegmenthead">
			<div class="tldrsegmentheadcontent">
				<a href="<?php echo get_permalink(110); ?>"><h1>UPCOMING</h1>
				<p>&laquo;</p></a>
				<h1 class="current">OFFERS</h1>
				<a href="<?php echo get_permalink(112); ?>"><p>&raquo;</p>
				<h1>OPPOR.</h1></a>
			</div>
		</div>


		<div class="tldrgallery">
			<ul class="tldrgallerycontent">
				<?php // Getting feedback form from a special category of posts
						$Posts = new WP_Query('cat=12&posts_per_page=1000&orderby=date&order=ASC');


						if ($Posts->have_posts()) {
							while ($Posts->have_posts()): 
								$Posts->the_post();

									get_template_part('singleitemcontent', get_post_format());
								 
								endwhile;
					} else {
							echo '<p>No content found</p>';
						} 

						$a = query_posts('cat=12');
						$result = count($a);


						if ($result < 5) { 		// set minimum number of fillers
							$difference = 5 - $result;
							while ($difference > 0) {
								echo '<li class="singleitemfiller"></li>';
								$difference --;
							}
					 	}

						// reset data. Gives back control to WP.
						wp_reset_postdata(); ?>
				</ul>
			</div>

			<div class="navbaranchortweak">
				<div id="navbaranchor"></div>
			</div>

		</div>
		


<?php get_footer(); ?> 