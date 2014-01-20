<?php

/** Step 3. */
function brokendoormedia_imagescroller() {


}

/** Step 2 (from text above). */


class BrokenDoorBackend{
	public function __construct(){
		if(is_admin()){
			add_action( 'admin_menu', 'my_plugin_menu' );
			add_action( 'admin_init', 'register_brokendoor_settings' );
		}
	}

	public function add_settings_pages(){
		//this adds in the page to edit the scroller
		add_theme_page( 'Broken Door Image Scroller Settings', 'Image Scroller Settings', 'manage_options', 'Broken Door Scroller', 'brokendoormedia_imagescroller');
		//this adds in the page for site settings (twitter, facebook, )
		add_theme_page( 'Broken Door Theme Settings', 'Theme Settings', 'manage_options', 'Broken Door Theme Settings', 'brokendoormedia_themesettings');
	}

	public function register_settings(){
		register_setting( 'brokendoor_settings', 'facebookurl' );
		register_setting( 'brokendoor_settings', 'facebookshow' );
		register_setting( 'brokendoor_settings', 'twitterurl' );
		register_setting( 'brokendoor_settings', 'twittershow' );
		register_setting( 'brokendoor_settings', 'vimeourl' );
		register_setting( 'brokendoor_settings', 'vimeoshow' );
	}

	public function output_slide_settings_page(){
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		//do any loading of the current held data
		?>

		<div class="wrap">
			<?php screen_icon(); ?>
			<h2>Image Scroller Settings.</h2>
			<div id="info">
				<h3>Your Homepage Scroller</h3>
				<p>Below are three seperate forms which will handle putting images on your home page. Each of the forms has a name and will try to promote a different portion of your website. You only get seconds before the average user leaves your sight so you want to try and grab them with these three slides.</p>
			</div>

			<div id="slide 1">
				<h3>Home Blurb</h3>
				<p>Get them a quick bit of info about your company that might get them to scroll down the page a bit</p>
				<form method ="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
					<table class="form-table">
						<tr valign="top">
					        <th scope="row">Slide Title Text</th>
					        <td><input type="text" name="slidetitle" value="update me" /></td>
					    </tr>
					    <tr valign="top">
					        <th scope="row">Slide Grabber Text</th>
					        <td><input type="text" name="slidetext" value="update me" /></td>
					    </tr>
					    <tr valign="top">
					        <th scope="row">Slide Background Image</th>
					        <td><input type="file" name="slideimage" /></td>
					    </tr>
					</table>
					<input type="hidden" name="" value="">
					<input type="submit" />
				</form>
			</div>

			<div id="slide 2">
				<h3>Contact/About</h3>
				<p>The home blurb is a great place for your slogan, and this is a great place to sell them on your work. maybe link to your portfolio page, or to a quick contact/quote page</p>
				<form method ="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
					<table class="form-table">
						<tr valign="top">
					        <th scope="row">Slide Title Text</th>
					        <td><input type="text" name="slidetitle" value="update me" /></td>
					    </tr>
					    <tr valign="top">
					        <th scope="row">Slide Grabber Text</th>
					        <td><input type="text" name="slidetext" value="update me" /></td>
					    </tr>
					    <tr valign="top">
					        <th scope="row">Slide Background Image</th>
					        <td><input type="file" name="slideimage" /></td>
					    </tr>
					</table>
					<input type="hidden" name="" value="">
					<input type="submit" />
				</form>
			</div>

			<div id="slide 3">
				<h3>Last Chance</h3>
				<p>Alrighty they are either going to scroll down for more info or leave the page at this point. Try and get them with one last slide!</p>
				<form method ="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
					<table class="form-table">
						<tr valign="top">
					        <th scope="row">Slide Title Text</th>
					        <td><input type="text" name="slidetitle" value="update me" /></td>
					    </tr>
					    <tr valign="top">
					        <th scope="row">Slide Grabber Text</th>
					        <td><input type="text" name="slidetext" value="update me" /></td>
					    </tr>
					    <tr valign="top">
					        <th scope="row">Slide Background Image</th>
					        <td><input type="file" name="slideimage" /></td>
					    </tr>
					</table>
					<input type="hidden" name="" value="">
					<input type="submit" />
				</form>
			</div>

		</div>
		<?php
	}

	public function output_theme_settings_page(){
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		//do any loading of the current held data
		?>

		<div class="wrap">
			<?php screen_icon(); ?>
			<h2>Theme Settings</h2>
			<p>These are any settings that relate to your theme. They are used for things like setting your Facebook URL, or not displaying it on the homepage</p>
			<form method="post" action="options.php">
				<?php
				$settingsGroup = 'brokendoor_settings';
				settings_fields( $settingsGroup );
				do_settings_fields( $settingsGroup );
				submit_button();
				?>
			</form>
		</div>
		<?php
	}

	public function check_facebook_info(){

	}

	public function check_twitter_info(){

	}

	public function check_wimeo_url(){

	}

	public function output_facebook_url_field(){

	}

	public function output_facebook_show_field(){

	}

	public function output_twitter_url_field(){

	}

	public function output_twitter_show_field(){

	}

	public function output_vimeo_url_field(){

	}

	public function output_vimeo_show_field(){

	}
}

?>