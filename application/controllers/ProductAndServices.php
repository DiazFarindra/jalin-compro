<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class ProductAndServices extends CI_Controller {



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

	public function index()

	{

		$data = [

			"title" => "Produk dan Layanan",

			"metaDescription" => "Jalin Produk", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/index');

		$this->load->view('layouts/footer');

	}



	public function jaringanATMLink()

	{

		$data = [

			"title" => "Switching - Jaringan ATM Link",

			"metaDescription" => "Jalin Produk - Jaringan ATM Link", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/switching/jaringan-atm-link');

		$this->load->view('layouts/footer');

	}



	public function debitLink()

	{

		$data = [

			"title" => "Switching - Debit Link",

			"metaDescription" => "Jalin Produk - Debit Link", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/switching/debit-link');

		$this->load->view('layouts/footer');

	}



	public function qris()

	{

		$data = [

			"title" => "Switching - QRIS",

			"metaDescription" => "Jalin Produk - QRIS", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/switching/qris');

		$this->load->view('layouts/footer');

	}

	

	public function jalinVirtualATM()

	{

		$data = [

			"title" => "Digital - Jalin Virtual ATM",

			"metaDescription" => "Jalin Produk - Jalin Virtual ATM", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/digital/jalin-virtual-atm');

		$this->load->view('layouts/footer');

	}

	

	public function jalinVerified()

	{

		$data = [

			"title" => "Digital - Jalin Verified",

			"metaDescription" => "Jalin Produk - Jalin Verified", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/digital/jalin-verified');

		$this->load->view('layouts/footer');

	}

	

	public function jalinCardlessWithdrawal()

	{

		$data = [

			"title" => "Digital - Jalin Cardless Withdrawal",

			"metaDescription" => "Jalin Produk - Jalin Cardless Withdrawal", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/digital/jalin-cardless-withdrawal');

		$this->load->view('layouts/footer');

	}

	

	public function jalinPaymentIntegrator()

	{

		$data = [

			"title" => "Digital - Jalin Payment Integrator",

			"metaDescription" => "Jalin Produk - Jalin Payment Integrator", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/digital/jalin-payment-integrator');

		$this->load->view('layouts/footer');

	}

	

	public function slm()

	{

		$data = [

			"title" => "Managed Service - Second Level Maintenance",

			"metaDescription" => "Jalin Produk - Second Level Maintenance", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/managed-service/second-level-maintenance');

		$this->load->view('layouts/footer');

	}

	

	public function premises()

	{

		$data = [

			"title" => "Managed Service - Premises",

			"metaDescription" => "Jalin Produk - Premises", 

			"navbarTextColor" => "text-white",

		];



		$this->load->view('layouts/header', $data);

		$this->load->view('layouts/nav');

		$this->load->view('product-and-services/managed-service/premises');

		$this->load->view('layouts/footer');

	}





}

