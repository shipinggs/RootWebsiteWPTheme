<?php get_header(); ?>

	<div class="tldr pagecontainer">
		<div id="navbaranchor"></div>
		<section class="tldrhead">
			<div class="tldrheadwrap">
				<img class="tldrheadlogo" src="http://i.imgur.com/wVyxNDG.png" alt="tl;dr logo">
				<p class="what-tldr-is">
					The Latest Daily Roundup
				</p>
			</div>
		</section>

		<section class="tldrcomponents">
			<div class="tldrcomponentscontent">
				<div class="tldrcomponent">
					<h2>LATEST PUBLICATION</h2>
					<p>See the latest weekly newsletter publicized to the school.</p>
					<a href="<?php echo get_permalink(118); ?>">See latest publication &rsaquo;</a>				
				</div>
				<div class="tldrcomponent">
				  <h2>UPCOMING EVENTS</h2>
					<p>All publicized upcoming staff and student events can be found here.</p>
					<a href="<?php echo get_permalink(110); ?>">See upcoming events &rsaquo;</a>
				</div>
				<div class="tldrcomponent">
					<h2>OFFERS</h2>
					<p>All external promotions, discounts and offers for the SUTDent.</p>
					<a href="<?php echo get_permalink(139); ?>">See offers &rsaquo;</a>
				</div>
				<div class="tldrcomponent">
					<h2>OPPORTUNITIES</h2>
					<p>Volunteering and scholarship opportunities for the SUTDent.</p>
					<a href="<?php echo get_permalink(112); ?>">See opportunities &rsaquo;</a>
				</div>
				<div class="tldrcomponent">
					<h2>ARCHIVES</h2>
					<p>You can view previous tl;dr publications here.</p>
					<a href="<?php echo get_category_link(17); ?>">See archives &rsaquo;</a>
				</div>
			</div>
		</section>

	</div>


<?php get_footer(); ?> 