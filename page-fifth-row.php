<?php get_header(); ?>

	<div class="fifthrow pagecontainer">
		<div id="navbaranchor"></div>
		<section class="fifthrowhead">
			<div class="fifthrowheadcontent">
				<h1>FIFTH ROW</h1>
				<a href="#existingclubs" class="fifthrowheaderbtns existingclubsbtn">Existing Clubs</a><a href="#sac" class="fifthrowheaderbtns startingfifthrowbtn">SAC & Space Bar</a><a href="#pitching" class="fifthrowheaderbtns pitchingfifthrowbtn">Club Pitching</a>
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


		<!--Starting your fifth row and Pitching for your fifth row segment -->
		<section id="sac" class="sacandpitching">
			<div class="sacandpitchingcontent">
				<div class="sac">
					<h2>SAC & Space Bar</h2>
					<p>
						The Student Activity Centre (SAC) and Space Bar are spaces that students and clubs share.<br><br>Have a look at what they are equipped with and how we can all use them responsibly so they remain inviting spaces for everyone.
					</p>
					<form action="https://docs.google.com/presentation/d/1404s01sfKVeRMZ5WEG3cJtCOe-OG5vJRm9cw46HmhlQ/edit?usp=sharing" target="_blank">
					<button type="submit">Amenities & Housekeeping</button>
					</form>
				</div>
				<div id="pitching" class="pitching">
					<h2>Club Pitching</h2>
					<p>
						Pitching is a yearly event for us to know that your Fifth Row is active and also for clubs to ask for funding.<br><br>Download the pitching package here and submit to <a href="mailto:si@studentgov.sutd.edu.sg">si@studentgov.sutd.edu.sg</a> by the end of the calendar year.
					</p>
					<form method="get" action="<?php bloginfo('stylesheet_directory'); ?>/guidelinesandforms/Pitching.zip">
					<button type="submit">Get Pitching Package</button>
					</form>
				</div>
			</div>
		</section>



	</div>	

<?php get_footer(); ?> 