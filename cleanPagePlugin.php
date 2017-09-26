<?php
/*
   Plugin Name: SM WEB Dev Clean Page 
   Plugin URI: http://www.smwebdev.com
   Description: Hide page elements for a clean sales page
   Version: 1.0
   Author: SM Web Development
   Author URI: http://www.smwebdev.com
   License: GPL2
   */

  if ( !defined('SM_CLEAN_PAGE')) define('SM_CLEAN_PAGE', plugin_dir_path(__FILE__));

include_once(SM_CLEAN_PAGE.'/SMCleanpluginsetup.class.php'); 

 //Load plugin setup scripts
$SMStart = new SMWeb_clean_page();

//Load and set options


//Load all function scripts







//Load admin scripts
if(is_admin()){
	
	$SMStart->adminInit();
}




?>