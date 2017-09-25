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