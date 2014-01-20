<?php get_header(); ?>
<?php 
//this would go here in order ot put the sidebar on the left
//get_sidebar();


//put the bulk of the body below this closing tag
//below is the content you will need to display the bulk of the body
?>



	<div id="internal-content-wrapper" class="row rounded-corners">
		<div class="large-12 columns" id="internal-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    				<h1 class="caps"><?php the_title(); ?></h1>
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
