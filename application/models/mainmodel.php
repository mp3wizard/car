<?php
class Mainmodel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function getpopup($text=''){
		if($text!=''){
			return '<script type="text/javascript">alert('.$text.');</script>';
		}else{
			return '';
		}
	}
}
?>