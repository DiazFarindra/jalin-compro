<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Hubungikami extends MY_Controller {



	function __construct() {

		parent::__construct();

		$this->lang_switcher();

		$this->urllang = $this->session->userdata('langDatabase');

	}



	public function index()

	{

		$data = [

			"title" => "Contact Us",

			"metaDescription" => "Jalin Contact", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('contact-us/index');

		$this->load->view('layouts/footer');

	}

}

