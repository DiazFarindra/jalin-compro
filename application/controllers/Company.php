<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Company extends MY_Controller {



	function __construct() {
		parent::__construct();
		$this->lang_switcher();
		$this->urllang = $this->session->userdata('langDatabase');
	}

	public function investorRelations()

	{

		$data = [

			"title" => "Hubungan Investor",

			"metaDescription" => "Hubungan Investor Jalin",

			"navbarTextColor" => "text-white"

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('company/investor-relations');

		$this->load->view('layouts/footer');

	}	

	public function aboutJalin()

	{

		$data = [

			"title" => "Tentang Jalin",

			"metaDescription" => "Tentang Jalin",

			"navbarTextColor" => "text-white"

		];

		$viewData['tentang'] = $this->GlobalModel->getDataRow('tentang_jalin',array('lang'=>$this->urllang));
		$viewData['milestone'] = $this->GlobalModel->getData('milestone',array('lang'=>$this->urllang));
		$viewData['visimisi'] = $this->GlobalModel->getData('visi_misi',array('lang'=>$this->urllang));
		$viewData['video'] = $this->GlobalModel->getDataRow('youtube',array('page'=>"tentang-jalin"));


		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('company/about-jalin',$viewData);

		$this->load->view('layouts/footer');

	}	

	public function faq()

	{

		$data = [

			"title" => "FAQ",

			"metaDescription" => "FAQ Jalin",

			"navbarTextColor" => "text-black"

		];

		// $viewData['tentang'] = $this->GlobalModel->getDataRow('tentang_jalin',array('lang'=>$this->urllang));
		// $viewData['milestone'] = $this->GlobalModel->getData('milestone',array('lang'=>$this->urllang));
		// $viewData['visimisi'] = $this->GlobalModel->getData('visi_misi',array('lang'=>$this->urllang));
		// $viewData['video'] = $this->GlobalModel->getDataRow('youtube',array('page'=>"tentang-jalin"));


		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('company/faq');

		$this->load->view('layouts/footer');

	}	
	
	public function tac()

	{

		$data = [

			"title" => "TAC",

			"metaDescription" => "TAC Jalin",

			"navbarTextColor" => "text-black"

		];

		// $viewData['tentang'] = $this->GlobalModel->getDataRow('tentang_jalin',array('lang'=>$this->urllang));
		// $viewData['milestone'] = $this->GlobalModel->getData('milestone',array('lang'=>$this->urllang));
		// $viewData['visimisi'] = $this->GlobalModel->getData('visi_misi',array('lang'=>$this->urllang));
		// $viewData['video'] = $this->GlobalModel->getDataRow('youtube',array('page'=>"tentang-jalin"));


		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('company/tac');

		$this->load->view('layouts/footer');

	}	

	public function management()

	{

		$data = [

			"title" => "Manajemen",

			"metaDescription" => "Manajemen",

			"navbarTextColor" => "text-white"

		];

		$viewData['mana1'] = $this->GlobalModel->getData('manajemen',array('lang'=>$this->urllang,'jajaran'=>1));
		$viewData['mana2'] = $this->GlobalModel->getData('manajemen',array('lang'=>$this->urllang,'jajaran'=>2));


		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('company/management',$viewData);

		$this->load->view('layouts/footer');

	}	

}

