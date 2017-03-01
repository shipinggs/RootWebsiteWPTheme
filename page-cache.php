<?php get_header(); ?>

	<div class="cache pagecontainer">
		<div id="navbaranchor"></div>
		<section class="cachehead">
			<div class="cacheheadcontent">
				<h1>CACHE</h1>
			</div>
		</section>

		<section class="usefulcontactsandlinks" id="usefulcontacts"><span id="usefullinks"></span>
			<div class="usefulcontactsandlinkscontent">
				<div class="usefulcontacts">
					<h2>Useful Contacts</h2>
					<ul>
						<li><p class="contactperson">Facilities</p><p class="contactnumber">6303 6699</p></li>
						<li><p class="contactperson">Security</p><p class="contactnumber">6303 6666</p></li>
						<li><p class="contactperson">Macs</p><p class="contactnumber">6777 3777</p></li>
						<li><a href="mailto:si@studentgov.sutd.edu.sg"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/emailicon.png">&nbsp;&nbsp;Root SI</a></li>
						<li><a href="mailto:communications@studentgov.sutd.edu.sg"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/emailicon.png">&nbsp;&nbsp;Root Comms</a></li>
						<li><a href="mailto:events@studentgov.sutd.edu.sg"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/emailicon.png">&nbsp;&nbsp;Root Events</a></li>
					</ul>
				</div>
				<div class="usefullinks">
					<h2>Useful Links</h2>
					<ul>
						<li><a href="http://edimension.sutd.edu.sg/" target="_blank">eDimension</a></li>
						<li><a href="https://myportal.sutd.edu.sg/psp/EPPRD/?cmd=login&languageCd=ENG" target="_blank">MyPortal</a></li>
						<li><a href="http://mail.sutd.edu.sg" target="_blank">SUTD Mail</a></li>
						<li><a href="https://downloads.sutd.edu.sg/cgi-bin/" target="_blank">SUTD Downloads</a></li>
						<li><a href="https://sutdvpn.sutd.edu.sg/dana-na/auth/url_0/welcome.cgi" target="_blank">SUTD VPN</a></li>
						<li><a href="http://sutdmap.appspot.com/" target="_blank">SUTD Map</a></li>
						<li><a href="https://www.instagram.com/sutdlife/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagramgray.png">&nbsp;&nbsp;sutdlife</a></li>
						<li><a href="https://www.facebook.com/groups/522995557746987/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/FBlogo.png">&nbsp;&nbsp;SUTD Family</a></li>
					</ul>
				</div>
			</div>
		</section>

		<section class="guidesandforms" id="guidesandforms">
			<div class="guidesandformscontent">
				<h2>Guides and Forms</h2>
				<ul>
					<li>
						<p>
							Organizing an event
						</p>
						<div>
							<form method="get" target="_blank" action="<?php bloginfo('stylesheet_directory'); ?>/guidelinesandforms/Event_Proposal_Guidelines.pdf">
							<button type="submit">Event Proposal Guide</button>
							</form>
							<form method="get" target="_blank" action="<?php bloginfo('stylesheet_directory'); ?>/guidelinesandforms/EventForms.zip">
							<button type="submit">Event Forms</button>
							</form>
						</div>
					</li>
					<li>
						<p>
							Publicizing your event
						</p>
						<div>
							<form method="get" target="_blank" action="<?php bloginfo('stylesheet_directory'); ?>/guidelinesandforms/SUTD_Identity_Guidelines.pdf">
							<button type="submit">Marketing Guide</button>
							</form>
							<form method="get" action="<?php echo get_permalink(428); ?>">
							<button type="submit">Comms. Guide</button>
							</form>
              <form method="get" target="_blank" action="<?php bloginfo('stylesheet_directory'); ?>/guidelinesandforms/Application_for_Publicity_Material.docx">
              <button type="submit">Poster Application Form</button>
              </form>
						</div>
					</li>
					<li>
						<p>
							Claiming for your event
						</p>
						<div>
							<form method="get" action="<?php bloginfo('stylesheet_directory'); ?>/guidelinesandforms/Finance.zip">
							<button type="submit">Finance Package</button>
							</form>
						</div>
					</li>
					<li>
						<p>
							Pitching for your Fifth Row
						</p>
						<div>
							<form method="get" action="<?php bloginfo('stylesheet_directory'); ?>/guidelinesandforms/PulseCheck.zip">
							<button type="submit">Pulse Check Package</button>
							</form>
						</div>
					</li>
					<li>
						<p>
							Starting a Fifth Row
						</p>
						<div>
							<form method="get" action="<?php bloginfo('stylesheet_directory'); ?>/guidelinesandforms/Startups.zip">
							<button type="submit">Start-up Package</button>
							</form>
						</div>
					</li>
          <li>
						<p>
							Housing Allocation Scheme
						</p>
						<div>
							<form method="get" action="<?php echo get_permalink(2998); ?>">
							<button type="submit">Allocation Scheme</button>
							</form>
						</div>
					</li>
				</ul>
			</div>
		</section>

	</div>



<?php get_footer(); ?>
