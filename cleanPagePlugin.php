<?php
/*
   Plugin Name: cleanPagePlugin by SM Web Dev
   Plugin URI: http://www.smwebdev.com
   Description: Hides Nav for sales pages
   Version: 1.0
   Author: SM Web Development
   Author URI: http://www.smwebdev.com
   License: GPL2
   */

  if ( !defined('SM_CLEAN_PAGE')) define('SM_CLEAN_PAGE', plugin_dir_path(__FILE__));

include_once(SM_CLEAN_PAGE.'/SMCleanpluginsetup.class.php');  //Load plugin setup scripts
$SMStart = new SMCleanpluginsetup();

//Load and set options


//Load all function scripts







//Load admin scripts
if(is_admin){


}




?>