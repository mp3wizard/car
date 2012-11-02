<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {
	
	function index($hashtag='')
	{
		
		$this->load->library('user_agent');
		
		$this->load->view('include/header');
		$this->load->view('include/topnavigation');
		$this->load->view('portal/index');
		$this->load->view('include/footer');
	}
	
	function parse_feed($process) {
        $xml  = @simplexml_load_string($process);
        $findTweet = $xml['entry'];
	    return $findTweet;
	}
	
	function debug(){
		$twitter_username = 'thaiflood OR from:BKK_BEST OR from:THQuake';
	    $twitter_entries = 5;
	    $feed = "http://search.twitter.com/search.atom?q=from:" . $twitter_username . "&rpp=".$twitter_entries;
	
	    $feed = file_get_contents($feed);
	    $tweets = $this->parse_feed($feed);
	    $n=0;
	    $n_t = count($tweets);
	    while($n < $n_t) {
	        echo "<div class=\"tweet\"><img src=\"img/tweet.png\" valign=\"absmiddle\" /> ";
	        echo $tweets[$n][1][0];
	        echo "</div>";
	        echo "<div class=\"date\">".$tweets[$n][0][0]."</div>";
	        $n++;
	    }
	}
	
	function debug2(){
		$ch = curl_init();
		//curl_setopt($ch, CURLOPT_URL, "http://api.twitter.com/1/statuses/user_timeline/thaiflood.json");
		curl_setopt($ch, CURLOPT_URL, "http://search.twitter.com/search.json?q=thaiflood%20BKK_BEST&rpp=5&include_entities=true&result_type=mixed");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($ch); 
		curl_close($ch);  
		
		// convert response
		$output = json_decode($output);
		
		echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
		
		print_r($output);
		
		// handle error; error output
		/*if(curl_getinfo($ch, CURLINFO_HTTP_CODE) !== 200) {
		
		  var_dump($output);
		}*/

	}
	
}