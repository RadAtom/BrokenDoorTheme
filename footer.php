
	<div id="footer" class="row">
		<div id="footer-set-photos-widget" class="large-4 columns">
			<h4>here is on set</h4>
			<ul class="small-block-grid-3">
				<li ><a href=""><img src="<?php bloginfo('template_url'); ?>/img/example1.jpg" class="rounded-corners"></a></li>
				<li ><a href=""><img src="<?php bloginfo('template_url'); ?>/img/example2.jpg" class="rounded-corners"></a></li>
				<li ><a href=""><img src="<?php bloginfo('template_url'); ?>/img/example3.jpg" class="rounded-corners"></a></li>
				<li ><a href=""><img src="<?php bloginfo('template_url'); ?>/img/example4.jpg" class="rounded-corners"></a></li>
				<li ><a href=""><img src="<?php bloginfo('template_url'); ?>/img/example1.jpg" class="rounded-corners"></a></li>
				<li ><a href=""><img src="<?php bloginfo('template_url'); ?>/img/example2.jpg" class="rounded-corners"></a></li>
			</ul>
		</div>
		<div id="footer-feed-widget" class="large-4 columns">
		</div>
		<div id="footer-nav-widget" class="large-4 columns">
			<h4>Broken Door Quick Links</h4>
			<hr>
			<?php wp_nav_menu( array('items_wrap' => '<ul id="%1$s" class="%2$s main-nav-bar nav-bar">%3$s</ul>','container' => '','BrokenDoorMedia' => 'menu-footer' ) ); ?>
		</div>
	</div>

	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/foundation.min.js"></script>
	<!--

	<script src="js/foundation/foundation.js"></script>

	<script src="js/foundation/foundation.dropdown.js"></script>

	<script src="js/foundation/foundation.alerts.js"></script>

	<script src="js/foundation/foundation.clearing.js"></script>

	<script src="js/foundation/foundation.placeholder.js"></script>

	<script src="js/foundation/foundation.forms.js"></script>

	<script src="js/foundation/foundation.cookie.js"></script>

	<script src="js/foundation/foundation.joyride.js"></script>

	<script src="js/foundation/foundation.magellan.js"></script>

	<script src="js/foundation/foundation.orbit.js"></script>

	<script src="js/foundation/foundation.reveal.js"></script>

	<script src="js/foundation/foundation.section.js"></script>

	<script src="js/foundation/foundation.tooltips.js"></script>

	<script src="js/foundation/foundation.topbar.js"></script>

	-->

	<script>
	$(document).foundation();
	function togglePortfolio() {
		if ( $('#schedule-slider').is(":visible") ) {
			//
			$('#schedule-slider').hide();
			$('#portfolio-slider').toggle("slow");
		} else if ( $('#contact-slider').is(":visible") ){
			$('#contact-slider').hide();
			$('#portfolio-slider').toggle("slow");
		};
	}

	function toggleSchedule(){
		if ( $('#portfolio-slider').is(":visible") ) {
			//
			$('#portfolio-slider').hide();
			$('#schedule-slider').toggle("slow");
		} else if ( $('#contact-slider').is(":visible") ){
			$('#contact-slider').hide();
			$('#schedule-slider').toggle("slow");
		};
	}

	function toggleContact(){
		if ( $('#portfolio-slider').is(":visible") ) {
			$('#portfolio-slider').hide();
			$('#contact-slider').toggle("slow");
		} else if ( $('#schedule-slider').is(":visible") ){
			$('#schedule-slider').hide();
			$('#contact-slider').toggle("slow");
		};
	}
	$( document ).ready(function() {
		// Handler for .ready() called.
		$('#contact-prompt').click(function(e) {  
			toggleContact();
		});
		$('#portfolio-prompt').click(function(e) {  
			togglePortfolio();
		});
		$('#schedule-prompt').click(function(e) {  
			toggleSchedule();
		});
	});
	</script>
</body>
</html>
