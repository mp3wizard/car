<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	function index(){
		redirect('content/view');
	}
	
	function view(){
		$this->load->view('include/phila/header');
		$this->load->view('include/phila/topnavigation');
		$this->load->view('content/view');
		$this->load->view('include/phila/footer');
	}
}

?>