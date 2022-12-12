<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->lang_switcher();
		$this->urllang = $this->session->userdata('langDatabase');
	}

	public function index()
	{
		$data = [
			"title" => "Home",
			"metaDescription" => "Jalin Website",
			"navbarTextColor" => "text-white",
			"navbarItemBorderColor" => "hover:border-white"
		];

		$viewData['youtube'] = $this->GlobalModel->queryManual("SELECT * FROM youtube LIMIT 3");
		$viewData['post'] = $this->GlobalModel->queryManual("SELECT * FROM wp_posts wp JOIN wp_post_kategori wpk ON wp.kategori_posts=wpk.id_post_kategori WHERE wp.post_lang='".$this->urllang."' AND wp.kategori_posts='4' ORDER BY ID DESC LIMIT 3");
		$viewData['bannerVid'] = $this->GlobalModel->getDataRow('banner',array('id_page'=>3,'kategori'=>1,'lang'=>$this->urllang));
		$viewData['modal'] = $this->GlobalModel->getData('banner',array('id_page'=>3,'kategori'=>2,'lang'=>$this->urllang));
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/nav');
		$this->load->view('home',$viewData);
		$this->load->view('layouts/footer');
	}	

	public function testing()
	{
		$data = [
			"title" => "Testing",
			"metaDescription" => "Jalin Website",
			"navbarTextColor" => "text-black"
		];

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/nav');
		$this->load->view('testing');
		$this->load->view('layouts/footer');
	}
}
