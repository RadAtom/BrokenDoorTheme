<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

  ?></title>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css" />
  
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css" />


  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <script src="<?php bloginfo('template_url'); ?>/js/vendor/custom.modernizr.js"></script>

</head>
<body <?php body_class(); ?>>
	<div id="header" class="row">
		<div class="row" id="top-nav-wrapper">
			<div class="small-10 small-offset-2 columns" id="top-nav">
				<?php wp_nav_menu( array('items_wrap' => '<ul id="%1$s" class="%2$s main-nav-bar nav-bar">%3$s</ul>','container' => '','BrokenDoorMedia' => 'menu-main' ) ); ?>
			</div>
		</div>
		<div class="row" id="header-branding">
			<div class="large-8 large-offset-1 columns">
				<h2 id=""><?php echo get_bloginfo('name'); ?></h2>
				<h3  id=""><?php echo get_bloginfo( 'description' );  ?></h3>
			</div>
			<div class="large-3 columns">
				<ul id="header-branding-logo">
					<li><a href="http://www.facebook.com/BrokenDoorMedia" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/facebookicon.png"></a></li>
					<li><a href="http://twitter.com/Broken_Door" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/twittericon.png"></a></li>
					<li><a href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/vimeoicon.png"></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="header-scroller-wrapper" class="row rounded-corners">

		<div class="small-12 large-1 columns scroller-attention" id="portfolio-prompt">
			<h3 class="rotated-text-right ">Portfolio</h3>
		</div>
		<div class="small-12 large-9 columns slide-content" id="portfolio-slider">
			<?php 
			if ( dynamic_sidebar('portfolio-home') ) : 
			else : 
			?>
			<p>need some content here jym</p>
			<?php endif; ?>
		</div>

		<div class="small-12 large-1 columns scroller-attention slide-content" id="schedule-prompt">
			<h3 class="rotated-text-right">Schedule</h3>
		</div>
		<div class="small-12 large-9 columns" style="display: none" id="schedule-slider">
			<?php 
			if ( dynamic_sidebar('schedule-home') ) : 
			else : 
			?>
			<p>need some content here jym</p>
			<?php endif; ?>
		</div>
 
		<div class="small-12 large-1 columns scroller-attention slide-content" id="contact-prompt">
			<h3 class="rotated-text-right">Contact Us</h3>
		</div>
		<div class="small-12 large-9 columns" style="display: none" id="contact-slider">
			<?php 
			if ( dynamic_sidebar('contact-home') ) : 
			else : 
			?>
			<p>need some content here jym</p>
			<?php endif; ?>
		</div>
	</div>