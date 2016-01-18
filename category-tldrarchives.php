<?php get_header(); ?>

	<div class="archives pagecontainer">
		<div id="navbaranchor"></div>
		<div class="archiveshead">
			<h1>NEWSLETTER ARCHIVES</h1>
		</div>

		<div class="archivesbody">
			<ul class="archivesbodycontent">
				

						<?php if (have_posts()) {
				while (have_posts()): the_post(); ?>
				
					<li class="archivepost"><a href="<?php the_permalink(); ?>">&raquo;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_title();?></a></li>

				<?php
				endwhile;
			} else {
					echo '<p>No content found</p>';
				} ?>
			</ul>

			<div class="navigation">
					<?php posts_nav_link(' ','<span class="seenewer">&lsaquo; See Newer Publications</span>','<span class="seeolder">See Older Publications &rsaquo;</span>'); ?>
			</div>

		</div>
		
		
	</div>


	


		


<?php get_footer(); ?> 