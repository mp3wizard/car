<?php
class Languagemodel extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->get_language();
	}
	
	function uritosession($uri){
		$aSession = array(
			'uri' => $uri
		);
		
		
		$this->session->set_userdata('urisession', $aSession);
	}
	
	function switch_language($lang='th'){
		$aSession = array(
			'lang' => $lang
		);
		
		$this->session->set_userdata('languagesession', $aSession);
	}
	
	function get_language(){
		$aLang = $this->session->userdata('languagesession');
		if(isset($aLang)){
			$lang = ($aLang['lang'])?$aLang['lang']:'th';
		}else{
			$lang = 'th';
		}
		return $lang;
	}
}
?>