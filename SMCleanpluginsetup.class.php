<?php
class SMWeb_clean_page{

public $smPages;
//Load all required functions
function __construct(){
	$this->setOptions();


}



//Load admin functions
function adminInit(){
	//load admin pages 
	add_action('admin_menu',array(this,'sm_clean_page_menu'));

}

//function to add menu page
function sm_clean_page_menu(){
	add_menu_page( 'SMWeb Clean Sales Page', 'SMWeb Clean Sales Page', 'manage_options', 'admin/php/SMCleanPageMenu.php', 'SMCleanPage_admin_page', 'admin/SMWDIconOnly.svg', 6  );

}

function setOptions(){

	$pagesJson = get_option( 'SM_clean_page_option', false );
	if($pagesJson!=false){
		$this->smPages = json_decode($pagesJson,true);
	} else {
		$this->smPages = false;
	}

}


}
?>