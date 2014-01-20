<?php get_header(); ?>
<?php 
//this would go here in order ot put the sidebar on the left
//get_sidebar();


//put the bulk of the body below this closing tag
//below is the content you will need to display the bulk of the body
?>
<?php

$options = get_option( 'brokendoorfront', 0);
$args = array(
	'offset'           => 0,
	'include'          => $options['left_home_box_page'],
	'post_type'        => 'page',
	'post_status'      => 'publish'
	); 

$leftPagesReturn = get_pages($args);
$args['include'] = $options['right_home_box_page'];
$rightPagesReturn = get_pages($args);
$left = $leftPagesReturn[0];
$right = $rightPagesReturn[0];
?>



	<div id="content-abouts-wrapper" class="row">
		<div class="large-5 columns" id="what">
			<div class="row  rounded-corners">
				<div class="small-12 large-2 columns scroller-attention">
					<h3 class="rotated-text-right"><?php echo $left->post_title?></h3>
				</div>
				<div class="small-12 large-10 slide-content columns">
					<?php echo $options['left_home_box_page_text'];?>
				</div>
			</div>
		</div>
		<div class="large-5 offset-2 columns" id="how">
			<div class="row  rounded-corners">
				
				<div class="small-12 large-2 columns scroller-attention">
					<h3 class="rotated-text-right"><?php echo $right->post_title?></h3>
				</div>
				<div class="small-12 large-10 slide-content columns">
					<?php echo $options['right_home_box_page_text'];?>
				</div>
			</div>
		</div>
	</div>
	
	<div id="home-content-wrapper" class="row rounded-corners">
		<div class="large-12 columns" id="home-content">
			<h1 class="caps"><?php //need to get some sort of settings and output it here... ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    				<?php the_content(); ?>
    				<?php wp_link_pages(array('before' => '<p><strong>'.esc_html__('Pages').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    				<?php edit_post_link(esc_html__('Edit this page','Chameleon')); ?>	
    			<?php endwhile; endif; ?>
		</div>
	</div>
	

<?php 
//this would go here in order ot put the sidebar on the right
//get_sidebar();
get_footer(); 
?>
