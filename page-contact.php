<?php get_header(); ?>

	<div class="contact pagecontainer">
		<div id="navbaranchor"></div>
		<section class="contacthead">
			<h1>CONTACT US</h1>
			<p class="threetypescontact">
				<a class="cbtn generalfeedbackbtn" href="#generalfeedback">FEEDBACK + ENQUIRIES</a>
				<a class="cbtn academicfeedbackbtn" href="#academicfeedback">ACADEMIC FEEDBACK</a>
				<a class="cbtn corporateenquiriesbtn" href="#corporateenquiries">CORPORATE ENQUIRIES</a>
			</p>
		</section>


		<section id="generalfeedback" class="generalfeedback contactsegment">
			<div class="generalfeedbackform">
				<h1>GENERAL<br>FEEDBACK & ENQUIRIES</h1>

				<?php // Getting feedback form from a special category of posts
						$generalFeedbackPosts = new WP_Query('cat=10&orderby=title&order=ASC');


						if ($generalFeedbackPosts->have_posts()) {
							while ($generalFeedbackPosts->have_posts()): 
								$generalFeedbackPosts->the_post(); ?>
								 <?php the_content();
								endwhile;
					} else {
							echo '<p>No content found</p>';
						} 
						// reset data. Gives back control to WP.
						wp_reset_postdata(); ?>
			</div>
		</section>

		<section id="academicfeedback" class="academicfeedback contactsegment">
			<div class="academicfeedbackform">
				<h1>ACADEMIC FEEDBACK</h1>
				<p>This will be available shortly</p>
			</div>
		</section>
		
		<section id="corporateenquiries" class="corporateenquiries contactsegment">
			<div class="corporatecontent">
				<div class="corporateleft">
				<h1>CORPORATE ENQUIRIES</h1>
			</div>
			<div class="corporateright">
				<p>
					If you are a business looking to tie up student offers and promotions with our school, or for any other form of partnership, please contact: 
					<a href="mailto:pr@studentgov.sutd.edu.sg" style="text-decoration: none; color:#668866;">pr@studentgov.sutd.edu.sg</a>
				</p>	
			</div>
			</div>
		</section>

	</div>
		


<?php get_footer(); ?> 