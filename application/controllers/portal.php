<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {
	
	function index($hashtag='')
	{
		$this->load->view('include/header');
		$this->load->view('include/topnavigation');
		$this->load->view('portal/index');
		$this->load->view('include/footer');
	}
	
}