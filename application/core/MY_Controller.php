<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public  $lang = "id";

	function __construct() {
		parent::__construct();
	}
	/**
	* return module language file
	*/
	protected function lang_switcher () {
	// Detect current language from URL and set it to session and changing default system language config
	$this->load->helper('language');

	   	if (!$this->uri->segment(1) == 'en-id' || !$this->uri->segment(1) == 'id-id' || !$this->uri->segment(1) == 'id-id') {
			$this->session->set_userdata("lang", $this->uri->segment(1));
			redirect(BASEURL.'id-id/');
	   	}
	   if ($this->uri->segment(1) == "id-id") {
	       $lang = "indonesia";
	       $this->session->set_userdata("lang",'id-id');
	       $this->session->set_userdata('langDatabase','id');
	       $this->session->set_userdata('language',$lang);
	   } elseif ($this->uri->segment(1) == "en-id") {
	       $lang = "english";
	       $this->session->set_userdata("lang",'en-id');
	       $this->session->set_userdata('langDatabase','en');
	       $this->session->set_userdata('language',$lang);
	   } else {
	       $lang = "english";
	       $this->session->set_userdata("lang",'en-en');
	       $this->session->set_userdata('langDatabase','en');
	       $this->session->set_userdata('language',$lang);
	   }

	  
	}
}
