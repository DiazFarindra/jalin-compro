<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class NewsAndPromo extends MY_Controller {



	function __construct() {

		parent::__construct();
		$this->lang_switcher();

		$this->urllang = $this->session->userdata('langDatabase');
	}





	public function news()

	{

		$data = [

			"title" => "Berita",

			"metaDescription" => "Jalin News",

			"navbarTextColor" => "text-black",

			"navbarItemBorderColor" => "hover:border-black"

		];

		$get = $this->input->get();
		$viewData['kategori'] = $this->GlobalModel->getData('wp_post_kategori',array('page_belong'=>"berita"));


		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('news-and-promo/news/news',$viewData);

		$this->load->view('layouts/footer');

	}

	public function kategorinews($value='')

	{

		$data = [

			"title" => "Kateo News",

			"metaDescription" => "Jalin Detail Berita",

			"navbarTextColor" => "text-black",

			"navbarItemBorderColor" => "hover:border-black"

		];

		$viewData['kategori'] = $this->GlobalModel->getData('wp_post_kategori',array('page_belong'=>"berita"));

		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('news-and-promo/news/kategoriNews',$viewData);

		$this->load->view('layouts/footer');

	}

	public function detailNews($valueOne='',$value='')

	{

		$data = [

			"title" => "Detail News",

			"metaDescription" => "Jalin Detail Berita",

			"navbarTextColor" => "text-black",

			"navbarItemBorderColor" => "hover:border-black"

		];

		$viewData['post'] = $this->GlobalModel->queryManualRow('SELECT * FROM wp_posts wp JOIN wp_post_kategori wpk ON wp.kategori_posts=wpk.id_post_kategori WHERE wp.post_name="'.$value.'"');
		$viewData['postRelated'] = $this->GlobalModel->queryManual('SELECT * FROM wp_posts wp JOIN wp_post_kategori wpk ON wp.kategori_posts=wpk.id_post_kategori WHERE wp.kategori_posts="'.$viewData['post']['kategori_posts'].'" ORDER BY wp.post_date DESC LIMIT 3');

		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('news-and-promo/news/detailNews',$viewData);

		$this->load->view('layouts/footer');

	}


	public function promo()

	{

		$data = [

			"title" => "Promo",

			"metaDescription" => "Jalin Promo",

			"navbarTextColor" => "text-black",

			"navbarItemBorderColor" => "hover:border-black"

		];

		$viewData['kategori'] = $this->GlobalModel->getData('wp_post_kategori',array('page_belong'=>"promo"));

		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('news-and-promo/promo/promo',$viewData);

		$this->load->view('layouts/footer');

	}


	public function detailPromo($valueOne='',$value='')
	{
		$data = [

			"title" => "Detail Promo",

			"metaDescription" => "Jalin Detail Promo",

			"navbarTextColor" => "text-black",

			"navbarItemBorderColor" => "hover:border-black"

		];

		$viewData['post'] = $this->GlobalModel->queryManualRow('SELECT * FROM wp_posts wp JOIN wp_post_kategori wpk ON wp.kategori_posts=wpk.id_post_kategori WHERE wp.post_name="'.$value.'" ');

		$viewData['postRelated'] = $this->GlobalModel->queryManual('SELECT * FROM wp_posts wp JOIN wp_post_kategori wpk ON wp.kategori_posts=wpk.id_post_kategori WHERE wp.kategori_posts="'.$viewData['post']['kategori_posts'].'" ORDER BY wp.post_date DESC LIMIT 3');

		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('news-and-promo/promo/detailPromo',$viewData);

		$this->load->view('layouts/footer');

	}



	 public function loaddataNews($value='')
    {



        $post = $this->input->post();

        $sortData = $this->session->userdata('sortdata');

        $if = ($sortData == "desc")?"desc":"asc";

        $if = ($sortData == "asc")?"asc":"desc";

        if (isset($post['kategori'])) {
        	$kategori = $this->GlobalModel->getDataRow('wp_post_kategori',array('url_post_kategori'=>$post['kategori']));
	        $ifKate = "AND wp.kategori_posts='".$kategori['id_post_kategori']."' ";
        } else {
        	$ifKate = "";
        }
        if (isset($post['kategoriOption'])) {
        	$implode = implode(",", $post['kategoriOption']);
        	$ifKatOption = 'AND wpk.id_post_kategori IN ('.$implode.')';
        } else {
        	$ifKatOption = "";
        }

        $viewData['post'] = $this->GlobalModel->queryManual('SELECT * FROM wp_posts wp JOIN wp_post_kategori wpk ON wp.kategori_posts=wpk.id_post_kategori WHERE wp.katagori_page="berita" AND wp.post_lang="'.$post['language'].'" '.$ifKate.' '.$ifKatOption.' ORDER BY wp.post_date DESC LIMIT '.$_POST["start"].', '.$_POST["limit"].'');

        $dataReturn = array(
        	'view' => $this->load->view('news-and-promo/news/loaddatanews',$viewData,TRUE),
        	'count'=> count($viewData['post'])
        );

        echo json_encode($dataReturn);

    }
     public function loaddataPromo($value='')
    {



        $post = $this->input->post();

        $sortData = $this->session->userdata('sortdata');



        $if = ($sortData == "desc")?"desc":"asc";

        $if = ($sortData == "asc")?"asc":"desc";


        if (isset($post['kategori'])) {
        	$kategori = $this->GlobalModel->getDataRow('wp_post_kategori',array('url_post_kategori'=>$post['kategori']));
	        $ifKate = "AND wp.kategori_posts='".$kategori['id_post_kategori']."' ";
        } else {
        	$ifKate = "";
        }

        if (isset($post['kategoriOption'])) {
        	$implode = implode(",", $post['kategoriOption']);
        	$ifKatOption = 'AND wpk.id_post_kategori IN ('.$implode.')';
        } else {
        	$ifKatOption = "";
        }


        $viewData['post'] = $this->GlobalModel->queryManual('SELECT * FROM wp_posts wp JOIN wp_post_kategori wpk ON wp.kategori_posts=wpk.id_post_kategori WHERE wp.katagori_page="promo" '.$ifKate.' AND wp.post_lang="'.$post['language'].'" ORDER BY wp.post_date DESC LIMIT '.$_POST["start"].', '.$_POST["limit"].'');

        $dataReturn = array(
        	'view' => $this->load->view('news-and-promo/promo/loaddatapromo',$viewData,TRUE),
        	'count'=> count($viewData['post'])
        );

        echo json_encode($dataReturn);
    }

    public function searchartikel($value='')
    {
        $post = $this->input->post();

        $searchVal = $this->GlobalModel->queryManual('SELECT * FROM wp_posts wp JOIN wp_post_kategori wpk ON wp.kategori_posts=wpk.id_post_kategori WHERE wp.post_title LIKE "%'.$post['searchVal'].'%" ');
        $html = '';
        foreach ($searchVal as $key => $val) {
            $html .='<div class="answer-search">';
            $html .='<a href="'.BASEURL.$post['lang'].'/berita/'.$val['url_post_kategori'].'/'.$val['post_name'].'">'.$val['post_title'].'</a>';
            $html .='</div>';
        }

        echo $html;
    }

    public function searchartikelpromo($value='')
    {
        $post = $this->input->post();

        $searchVal = $this->GlobalModel->queryManual('SELECT * FROM wp_posts wp JOIN wp_post_kategori wpk ON wp.kategori_posts=wpk.id_post_kategori WHERE wp.katagori_page="promo" AND wp.post_title LIKE "%'.$post['searchVal'].'%" ');
        $html = '';
        foreach ($searchVal as $key => $val) {
            $html .='<div class="answer-search">';
            $html .='<a href="'.BASEURL.$post['lang'].'/berita/'.$val['url_post_kategori'].'/'.$val['post_name'].'">'.$val['post_title'].'</a>';
            $html .='</div>';
        }

        echo $html;
    }

}

