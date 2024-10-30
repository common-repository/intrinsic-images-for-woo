<?php

/**
 * @author Wiz Plugins
 * @package WiiRestApi
 * @license GNU General Public License v2 or later
**/


defined("WII_EXEC") or die("Silent is golden");

class WiiRestApi{


	/**
	 * WiiRestApi:__construct()
	**/
	function __construct()
	{
		// posts
		add_action("rest_api_init", array($this, "postRestApi"));
		add_action("rest_api_init", array($this, "pageRestApi"));
		// taxonomies
		add_action("rest_api_init", array($this, "categoryRestApi"));
		add_action("rest_api_init", array($this, "postTagRestApi"));
	}
	/**
	 * WiiRestApi:postRestApi()
	 * ref: https://developer.wordpress.org/reference/functions/register_rest_field/
	**/
	function postRestApi(){
	}
	
	/**
	 * WiiRestApi:pageRestApi()
	 * ref: https://developer.wordpress.org/reference/functions/register_rest_field/
	**/
	function pageRestApi(){
	}
	
	/**
	 * WiiRestApi:categoryRestApi()
	 * ref: https://developer.wordpress.org/reference/functions/register_rest_field/
	**/
	function categoryRestApi(){
	}
	
	/**
	 * WiiRestApi:postTagRestApi()
	 * ref: https://developer.wordpress.org/reference/functions/register_rest_field/
	**/
	function postTagRestApi(){
	}
	
	
	
}
