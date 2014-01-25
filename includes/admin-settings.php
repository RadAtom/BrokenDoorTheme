<?php
add_action('admin_menu', 'add_brokendoor_menu_options');
add_action( 'admin_init', 'register_brokendoor_setting' );
add_action( 'admin_init', 'register_brokendoor_appearance_settingsfroms' );
//add_action('after_setup_theme','setup_brokendoor_default_appearance', 9 );


function setup_brokendoor_default_settings(){
	global $brokendoorsettings;
	$brokendoorsettings = get_option( 'theme_brokendoorsettings' );
	if ( false == $brokendoorsettings ) {
		$brokendoorsettings = get_default_settings();
	}
	update_option( 'brokendoorfront' , $brokendoorsettings );
}

function register_brokendoor_setting() {
	register_setting( 'broken_door_media_options' , 'brokendoorfront','make_front_page_pretty' ); 
}

function make_front_page_pretty($input){
		if( !is_numeric( $input['left_home_box_page'] ) )
            $input['left_home_box_page'] = '';  

        if( !is_numeric( $input['right_home_box_page'] ) )
            $input['right_home_box_page'] = ''; 

        if( !empty( $input['front_youtube_link'] ) )
            $input['front_youtube_link'] = sanitize_text_field( $input['front_youtube_link'] );

        return $input;
}

function register_brokendoor_appearance_settingsfroms(){
	//this adds a silly lil section for them
	add_settings_section('broken_door_media_appearance_options' ,
		'Front Page Settings ',
		'render_brokendor_appearance_settings_from_prompt' ,
		'theme-settings' );

	add_settings_field('left_home_box_page' ,
		'Left Box' ,
		'render_leftbox_input' ,
		'theme-settings' ,
		'broken_door_media_appearance_options');

	add_settings_field('right_home_box_page' ,
		'Right Box' ,
		'render_rightbox_input' ,
		'theme-settings' ,
		'broken_door_media_appearance_options');

	add_settings_field('front_youtube_link' ,
		'Youtube Link for front page video' ,
		'render_youtube_link_input' ,
		'theme-settings' ,
		'broken_door_media_appearance_options');

	//this adds in some of those settings for them
}

function render_leftbox_input(){
	$args = array(
		'sort_order' => 'ASC' ,
		'sort_column' => 'id' ,
		'post_type' => 'page' ,
		'post_status' => 'publish'); 
	$pages = get_pages($args);
	$selected = get_option( 'brokendoorfront', 0);
	if ($pages) {
		?><select id="left_home_box_page" name="brokendoorfront[left_home_box_page]"><?php
		foreach ($pages as $page) {
	        ?><option <?php selected( $page->ID == $selected['left_home_box_page']); ?> value="<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></option><?php

		}
		?></select><?php
	} else {
		?>
		<p>No pages were returned, either something is wrong or you need to create some pages. If you for sure have pages report this problem!</p>
		<?php
	}
}

function render_rightbox_input(){
	$args = array(
		'sort_order' => 'ASC' ,
		'sort_column' => 'id' ,
		'post_type' => 'page' ,
		'post_status' => 'publish'); 
	$pages = get_pages($args);
	$selected = get_option( 'brokendoorfront', 0);
	if ($pages) {
		?><select name="brokendoorfront[right_home_box_page]"><?php
		foreach ($pages as $page) {
	        ?><option <?php selected( $page->ID == $selected['right_home_box_page']); ?> value="<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></option><?php

		}
		?></select><?php
	} else {
		?>
		<p>No pages were returned, either something is wrong or you need to create some pages. If you for sure have pages report this problem!</p>
		<?php
	}
}

function render_youtube_link_input(){
	$origText = get_option( 'brokendoorfront', 0);
	if($origText == 0){
		$origText['front_youtube_link'] = 'nothing was found essay';
	}
	?>
	<input id="front_youtube_link" name="brokendoorfront[front_youtube_link]" value="<?php echo $origText['front_youtube_link']; ?>" />
	<?php
}

function render_brokendor_appearance_settings_from_prompt(){
	?>
	<h4>These Settings handle some of the functionality of manging what is displayed on the front page.</h4>
	<p>Currently the front sliders are widgets since those apply to all pages, Below you will be able to edit what pages are linked to in the smaller boxes below the home pages slider. Since those are only on the front page <a href="http://radatom.com" target="_blank">we</a> put a couple of back end settings for you to be able to change that text, without having to try and manage a lot of content at once. Below in the table are the various IDs and their page name so that you can put the id number in the text boxs below.</p>

	<?php
}

function render_brokendorr_appearance_settings_from(){
	?>
	<div class="wrap">
		<div id="icon-themes" class="icon32"><br /></div>
		<h2>Broken Door Media Theme Settings</h2>
		<?php 
			if ( isset( $_GET['settings-updated'] ) ) {
				echo "<div class='updated'><p>Theme settings updated successfully.</p></div>";
			}
		?>

        <form action="options.php" method="post">
        	<?php
				settings_fields( 'broken_door_media_options' );   
				do_settings_sections('theme-settings');
				submit_button();
			?>
    	</form>
	</div>
	<?php
}

function add_brokendoor_menu_options(){
     add_theme_page('Theme Options', 'Theme Options', 'edit_theme_options', 'theme-settings', 'render_brokendorr_appearance_settings_from');
}

function get_default_settings(){
$defaults = array(
	'left_home_box_page'=>99999,
	'right_home_box_page'=>999999);
return $defaults;
}