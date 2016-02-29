<?php get_header(); ?>

<div class="single pagecontainer">
<div id="navbaranchor"></div>
	<?php if (have_posts()) {
	while (have_posts()): the_post(); ?>

	<div class="singleposthead">
		<div class="singlepostheadcontent">
			<h2><?php the_title(); ?></h2>
			<p>Posted on: <?php the_time('jS F Y, g:ia'); ?></p>
			<div> 
				<?php 
					$categories = get_the_category();
					
					foreach ($categories as $category) {
					if ($category->cat_name == "Upcoming Events") {
						echo '<a href="' . get_permalink(110) . '">Back to Upcoming Events</a>';
					} else if ($category->cat_name == "Offers") {
						echo '<a href="' . get_permalink(139) . '">Back to Offers</a>'; 
					} else if ($category->cat_name == "Opportunities") {
						echo '<a href="' . get_permalink(112) . '">Back to Opportunities</a>';
					}
				} ?> 
			</div>
		</div>
	</div>
	
	<div class="post">
		<div class="postcontent">

				<?php the_content(); ?>
				
					<?php
					endwhile;
				} else {
						echo '<p>No content found</p>';
					}

				?>

				<?php 
					$categories = get_the_category();
					
					foreach ($categories as $category) {
					if ($category->cat_name == "Upcoming Events") {
						echo '<a class="postbtmbtn" href="' . get_permalink(110) . '">Back to Upcoming Events</a>';
					} else if ($category->cat_name == "Offers") {
						echo '<a class="postbtmbtn" href="' . get_permalink(139) . '">Back to Offers</a>'; 
					} else if ($category->cat_name == "Opportunities") {
						echo '<a class="postbtmbtn" href="' . get_permalink(112) . '">Back to Opportunities</a>';
					}
				} ?> 
		</div>
	</div>

</div>

<?php get_footer(); ?>
