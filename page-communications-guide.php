<?php get_header(); ?>

	<div class="guide pagecontainer">
		<div id="navbaranchor"></div>
		<section class="guidehead">
			<div class="guideheadcontent">
				<h1><?php the_title(); ?></h1>
				<h5>Updated: <?php the_modified_date('F Y');?></h5>
				<a href="<?php echo get_permalink( $post->post_parent ); ?>">Back to Cache</a>
			</div>
		</section>

		<?php if (have_posts()) {
	    while (have_posts()): the_post(); ?>
	  
	      <?php
	      echo get_the_content(); ?>
	    

	    <?php
	    endwhile;
		  } else {
		      echo '<p>No content found</p>';
		    } 
		?>

	</div>
		
	

<?php get_footer(); ?> 