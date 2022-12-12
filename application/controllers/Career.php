<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Career extends MY_Controller {



	function __construct() {

		parent::__construct();

		$this->lang_switcher();

		$this->urllang = $this->session->userdata('langDatabase');

	}



	public function viewCareer()

	{

		$data = [

			"title" => "Karir",

			"metaDescription" => "Jalin Website", 

			"navbarTextColor" => "text-white",

		];


		$viewData['karyawan'] = $this->GlobalModel->getData('karyawanjalin',array('lang'=>$this->urllang));
		$viewData['banner'] = $this->GlobalModel->getDataRow('banner',array('id_page'=>5,'kategori'=>1,'lang'=>$this->urllang));
		$viewData['karir'] = $this->GlobalModel->getData('karir',array('lang'=>$this->urllang));
		$viewData['video'] = $this->GlobalModel->getData('youtube',array('page'=>'karir'));
		$viewData['kerjadijalin'] = $this->GlobalModel->getData('serunyakerja',array('lang'=>$this->urllang));
		$viewData['menjalinmomen']	=	$this->GlobalModel->getData('menjalinmomen',null);
		$viewData['karyawanSatu'] = $this->GlobalModel->queryManual('SELECT * FROM karyawanjalin WHERE lang="id" ORDER BY id_karyawanjalin DESC');



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('career/career',$viewData);

		$this->load->view('layouts/footer');

	}

	

	public function detailCareer($value="")

	{

		$data = [

			"title" => " Detail Karir",

			"metaDescription" => "Jalin Website",

			"navbarTextColor" => "text-black"

		];

		$viewData['karir'] = $this->GlobalModel->getDataRow('karir',array('url_karir'=>$value));
		$viewData['karirRelated'] = $this->GlobalModel->getData('karir',array('lang'=>$this->urllang));

		// pre($viewData);

		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('career/detail-career',$viewData);

		$this->load->view('layouts/footer');

	}

	public function showkarir($value='') 
	{
		$post = $this->input->post();
		$viewData['karir'] = $this->GlobalModel->getDataLike('karir',array('nama_job'=>$post['choices'],'lang'=>$this->urllang));

		$this->load->view('career/career-all',$viewData);
	}

}

