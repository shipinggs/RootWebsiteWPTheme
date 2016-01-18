<?php wp_footer(); ?>

<footer class="footer">
	<div class="footercontent">
		<div class="footerlogo">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ROOT</a></h1>
		</div>
		<div class="sitemap">
			<ul>
				<li class="parent"><a href="<?php echo get_permalink(77); ?>">ABOUT US</a></li>
				<li class="parent"><a href="<?php echo get_permalink(81); ?>">CONTACT US</a></li>
				<li class="parent"><a href="<?php echo get_permalink(101); ?>">CACHE</a></li>
			</ul>
			<ul>
				<li class="parent"><a href="<?php echo get_permalink(15); ?>">NEWSLETTER</a></li>
				<li class="parent"><a href="<?php echo get_permalink(99); ?>">EVENTS</a></li>
				<li class="parent"><a href="<?php echo get_permalink(83); ?>">FIFTH ROW</a></li>
			</ul>
			<ul>
				<li class="child"><a href="<?php echo get_permalink(110); ?>">UPCOMING</a></li>
				<li class="child"><a href="<?php echo get_permalink(139); ?>">OFFERS</a></li>
				<li class="child"><a href="<?php echo get_permalink(112); ?>">OPPORTUNITIES</a></li>
			</ul>
		</div>
		<div class="footerfooter">
			<span class="footerorganisationname">ROOT : SUTD Student Government&nbsp;&nbsp;</span><span>&nbsp;&nbsp;2016</span>
		</div>
	</div>
</footer>

</div> <!--wrapper-->

</body>
</html>