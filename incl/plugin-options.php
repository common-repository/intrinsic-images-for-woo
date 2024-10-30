<?php

/**
 * @author Wiz Plugins
 * @package WiiMetaBoxes
 * @license GNU General Public License v2 or later
**/


defined("WII_EXEC") or die("Silent is golden");

/**
 * WiiPluginOptions
**/
class WiiPluginOptions{

	/**
	 * WiiPluginOptions:wii_wii_settings_setting()
	**/
	private $wii_wii_settings_setting = array();



	/**
	 * WiiPluginOptions:__construct()
	**/
	function __construct()
	{
		if(is_admin()){
			// wii-settings
			$this->wii_wii_settings_setting = get_option("wii_wii_settings_setting");
			add_action("admin_menu",array($this,"wiiAddWiiSettingsPageOption"));
			add_action("admin_init",array($this,"wiiAddWiiSettingsPageInit"));
			add_action("admin_footer",array($this,"wiiWiiSettingsAdminFooter"));
			add_action("admin_enqueue_scripts",array($this,"wiiWiiSettingsAdminEnqueueScripts"));
			
		}
	}




	// TODO: WII-SETTINGS--------------------------------------------------------------------------


	/**
	 * WiiPluginOptions:wiiAddWiiSettingsPageOption()
	 * @ref: https://developer.wordpress.org/reference/functions/add_options_page/
	**/
	function wiiAddWiiSettingsPageOption()
	{
		add_options_page(
			__("Intrinsic Images Woo ","intrinsic-images-for-woo"), //$page_title
			__("Intrinsic Images","intrinsic-images-for-woo"), //$menu_title
			"manage_options", //$capability
			"wii_wii_settings",//$menu_slug
			array($this,"wiiWiiSettingsPageContent")//$function
		);
	}


	/**
	 * WiiPluginOptions:wiiWiiSettingsPageContent()
	**/
	function wiiWiiSettingsPageContent()
	{
		$this->wii_wii_settings_setting = get_option("wii_wii_settings_setting");
		?>
		<div class="wrap">
			<h1><?php _e("Intrinsic Images Woo ","intrinsic-images-for-woo") ?></h1>
			<div class="wii-box">
				<div class="inside">
					<form method="post" action="options.php">
						<?php settings_fields("wii_wii_settings_group"); ?>
						<?php do_settings_sections("wii-wii-settings"); ?>
						<?php submit_button(); ?>
					</form>
				</div>
			</div>
		</div>
		<?php
	}


	/**
	 * WiiPluginOptions:wiiAddWiiSettingsPageInit()
	**/
	function wiiAddWiiSettingsPageInit()
	{
		
		
		register_setting(
			"wii_wii_settings_group",// group
			"wii_wii_settings_setting", //setting name
			array($this,"wiiAddWiiSettingsSanitize") //sanitize_callback
		);
		
		
		add_settings_section(
			"wii_wii_settings_section", //id
			__("General Settings","intrinsic-images-for-woo"), //title
			array($this,"wiiAddWiiSettingsInfo"), //callback
			"wii-wii-settings" //page
		);
		
		// enable-settings
		add_settings_field(
			"wii_enable_settings", //id
			__("Enable settings","intrinsic-images-for-woo"), //title
			array($this,"wiiEnableSettingsCallback"), //callback
			"wii-wii-settings", //page
			"wii_wii_settings_section" //section
		);
	}


	/**
	 * WiiPluginOptions:wiiAddWiiSettingsSanitize()
	**/
	function wiiAddWiiSettingsSanitize($input)
	{
		$new_input = array();
		
		// enable-settings
		if(isset($input["wii_enable_settings"]))
			$new_input["wii_enable_settings"] = sanitize_text_field($input["wii_enable_settings"]);
		
		return $new_input;
	}


	/**
	 * WiiPluginOptions:wiiAddWiiSettingsInfo()
	**/
	function wiiAddWiiSettingsInfo()
	{
		_e("Enter your settings below:<br>In this section you can enable the plugin or disable it for quick debugging. ","intrinsic-images-for-woo");
	}
	
	
	/**
	 * WiiPluginOptions:wiiEnableSettingsCallback()
	**/
	function wiiEnableSettingsCallback(){
		$options[] = array( "value"=>"yes", "label" => __("Yes","intrinsic-images-for-woo") );
		$options[] = array( "value"=>"no", "label" => __("No","intrinsic-images-for-woo") );
		if(isset($this->wii_wii_settings_setting["wii_enable_settings"])){
			$value = esc_attr($this->wii_wii_settings_setting["wii_enable_settings"]);
		}else{
			$value = "Yes";
		}
		?>
			<select class="regular-text" id="wii-enable-settings" name="wii_wii_settings_setting[wii_enable_settings]">
			<?php
			foreach($options as $option){
				if($value == $option["value"]){
					echo "<option selected value=\"" . $option["value"] . "\">" . $option["label"] . "</option>";
				}else{
					echo "<option value=\"" . $option["value"] . "\">" . $option["label"] . "</option>";
				}
			}
			?>
			</select>
		<p class="description"><?php _e("Set this to yes to enable the intrinsic tags. No will remove them from the shop and archive pages","intrinsic-images-for-woo") ?></p>
		<?php
	}
	
	
	
	
	/**
	 * WiiPluginOptions:wiiWiiSettingsAdminFooter($hook)
	**/
	function wiiWiiSettingsAdminFooter()
	{
		$screen = get_current_screen();
		if($screen->id == "settings_page_wii_wii_settings")
		{
			//enable-settings
			
		}
	}
	
	
	/**
	 * WiiPluginOptions:wiiWiiSettingsAdminEnqueueScripts($hook)
	**/
	function wiiWiiSettingsAdminEnqueueScripts($hook)
	{
		$screen = get_current_screen();
		if($screen->id == "settings_page_wii_wii_settings")
		{
			//enable-settings
			
		}
	}
	
	
}
