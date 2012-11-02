<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Philanthropy extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	function twitterfeed(){
		$ch = curl_init();
		//curl_setopt($ch, CURLOPT_URL, "http://api.twitter.com/1/statuses/user_timeline/thaiflood.json");
		curl_setopt($ch, CURLOPT_URL, "http://search.twitter.com/search.json?q=from%3Athaiflood%20OR%20from%3ABKK_BEST%20OR%20from%3ATHQuake%20OR%20from%3ANewEarthquake%20OR%20from%3AMrVop%20OR%20from%3AThaiRedCross%20OR%20from%3Andwc_Thai&src=typd&rpp=10&include_entities=true&result_type=mixed");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($ch); 
		curl_close($ch);  
		
		// convert response
		$output = json_decode($output);
		
		return $output;
	}
	
	function index(){
	
		$twitterlist = $this->twitterfeed();
		$tweets = array();
		foreach($twitterlist->results as $tdata){
			$tweets[] = array(
				'from' => $tdata->from_user,
				'text' => $tdata->text,
				'created' => $tdata->created_at
			);
		}
		
		$data['tweets'] = $tweets;
		
		$this->load->view('include/phila/header');
		$this->load->view('include/phila/topnavigation');
		$this->load->view('philanthropy/index', $data);
		$this->load->view('include/phila/footer');
	}
	
	function about(){
		$this->load->view('include/phila/header');
		$this->load->view('include/phila/topnavigation');
		$this->load->view('philanthropy/about');
		$this->load->view('include/phila/footer');
	}
	
	function contact(){
	
		$this->form_validation->set_rules('contact_name','ชื่อ','trim|required');
		$this->form_validation->set_rules('contact_title','เรื่อง','trim|required');
		$this->form_validation->set_rules('contact_message','ข้อความ','trim|required');
		$this->form_validation->set_message('required','กรุณาระบุ "%s"');
		$this->form_validation->set_error_delimiters('<div class="message error">','</div>');
		
		if($this->form_validation->run()===FALSE){
			$this->load->view('include/phila/header');
			$this->load->view('include/phila/topnavigation');
			$this->load->view('philanthropy/contact');
			$this->load->view('include/phila/footer');
		}else{
			$this->load->library('email');
						
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_user'] = 'hondafund@gmail.com';
			$config['smtp_pass'] = 'honda2012';
			$config['smtp_port'] = '465';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$config['maintype'] = 'html';
						
			$this->email->initialize($config);
			
			$this->email->from('contact@hondafundthailand.org','Website contact information');
			$this->email->to('hondafund@gmail.com');
			//$this->email->cc('');
			$data['contactinfo'] = array(
				'name' => $this->input->post('contact_name'),
				'title' => $this->input->post('contact_title'),
				'message' => $this->input->post('contact_message')
			);
			$this->email->subject('มีการติดต่อจาก คุณ '.$this->input->post('contact_name'));
			$mailbody = $this->load->view('philanthropy/email/contact', $data, TRUE);
			$this->email->message($mailbody);
			
			if($this->email->send()===TRUE){
				$message = '<div class="message success">ข้อมูลของท่านถูกส่งไปยังผู้ดูแลเรียบร้อย ขอบคุณค่ะ</div>';
			}else{
				$message = '<div class="message error">ไม่สามารถส่งข้อมูลได้ กรุณาลองใหม่อีกครั้งค่ะ</div>';
			}
			
			$this->session->set_flashdata('message', $message);
			
			redirect('philanthropy/contact');
		}
	}
	
	function call(){
		$this->load->view('include/phila/header');
		$this->load->view('include/phila/topnavigation');
		$this->load->view('philanthropy/call');
		$this->load->view('include/phila/footer');
	}
}

?>