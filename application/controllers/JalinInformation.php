<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JalinInformation extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function aboutJalin()
	{
		$data = [
			"title" => "Tentang Jalin",
			"metaDescription" => "Tentang Jalin",
			"navbarTextColor" => "text-white"
		];

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/nav');
		$this->load->view('beta-pages/jalin-information/about-jalin');
		$this->load->view('layouts/footer');
	}

	public function jalinCulture()
	{
		$data = [
			"title" => "Budaya Jalin",
			"metaDescription" => "Budaya Jalin",
			"navbarTextColor" => "text-white"
		];

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/nav');
		$this->load->view('beta-pages/jalin-information/jalin-culture');
		$this->load->view('layouts/footer');
	}	

	public function management()
	{
		$data = [
			"title" => "Manajemen",
			"metaDescription" => "Manajemen Jalin",
			"navbarTextColor" => "text-white"
		];

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/nav');
		$this->load->view('beta-pages/jalin-information/management');
		$this->load->view('layouts/footer');
	}

	public function cgc()
	{
		$data = [
			"title" => "CGC",
			"metaDescription" => "CGC Jalin",
			"navbarTextColor" => "text-white"
		];

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/nav');
		$this->load->view('beta-pages/jalin-information/management');
		$this->load->view('layouts/footer');
	}

	public function investorRelations()
	{
		$data = [
			"title" => "Investor Relations",
			"metaDescription" => "Hubungan Investor Jalin",
			"navbarTextColor" => "text-white"
		];

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/nav');
		$this->load->view('beta-pages/jalin-information/investor-relations');
		$this->load->view('layouts/footer');
	}	
}
