<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['^(en-id|en-en|id-id)/testing'] = 'Home/testing';
$route['^(en-id|en-en|id-id)/produk-dan-layanan'] = 'ProductAndServices/index';

$route['^(en-id|en-en|id-id)/promo'] = 'NewsAndPromo/promo';
$route['^(en-id|en-en|id-id)/promo/(:any)'] = 'NewsAndPromo/kategoripromo/$2';
$route['^(en-id|en-en|id-id)/promo/(:any)/(:any)'] = 'NewsAndPromo/detailPromo/$2/$3';
$route['^(en-id|en-en|id-id)/promo/loaddata'] = 'NewsAndPromo/loaddataNews';

$route['^(en-id|en-en|id-id)/berita'] = 'NewsAndPromo/news';
$route['^(en-id|en-en|id-id)/berita/(:any)'] = 'NewsAndPromo/kategorinews/$2';
$route['^(en-id|en-en|id-id)/berita/(:any)/(:any)'] = 'NewsAndPromo/detailNews/$2/$3';

$route['^(en-id|en-en|id-id)/karir'] = 'Career/viewCareer';
$route['^(en-id|en-en|id-id)/karir/(:any)'] = 'Career/detailCareer/$2';
$route['^(en-id|en-en|id-id)/perusahaan/tentang-jalin'] = 'Company/aboutJalin';
$route['^(en-id|en-en|id-id)/perusahaan/hubungan-investor'] = 'Company/investorRelations';
$route['^(en-id|en-en|id-id)/perusahaan/faq'] = 'Company/faq';
$route['^(en-id|en-en|id-id)/perusahaan/syarat-dan-ketentuan'] = 'Company/tac';
$route['^(en-id|en-en|id-id)/perusahaan/manajemen'] = 'Company/Management';
$route['^(en-id|en-en|id-id)/hubungi-kami'] = 'Hubungikami/index';

$route['^(en-id|en-en|id-id)/produk-dan-layanan/switching/jaringan-atm-link'] = 'ProductAndServices/jaringanATMLink';
$route['^(en-id|en-en|id-id)/produk-dan-layanan/switching/debit-link'] = 'ProductAndServices/debitLink';
$route['^(en-id|en-en|id-id)/produk-dan-layanan/switching/qris'] = 'ProductAndServices/qris';
$route['^(en-id|en-en|id-id)/produk-dan-layanan/digital/jalin-virtual-atm'] = 'ProductAndServices/jalinVirtualATM';
$route['^(en-id|en-en|id-id)/produk-dan-layanan/digital/jalin-verified'] = 'ProductAndServices/jalinVerified';
$route['^(en-id|en-en|id-id)/produk-dan-layanan/digital/jalin-cardless-withdrawal'] = 'ProductAndServices/jalinCardlessWithdrawal';
$route['^(en-id|en-en|id-id)/produk-dan-layanan/digital/jalin-payment-integrator'] = 'ProductAndServices/jalinPaymentIntegrator';
$route['^(en-id|en-en|id-id)/produk-dan-layanan/managed-service/second-level-maintenance'] = 'ProductAndServices/slm';
$route['^(en-id|en-en|id-id)/produk-dan-layanan/managed-service/premises'] = 'ProductAndServices/premises';


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// '/en' and '/fr' URIs -> use default controller
$route['^en-en$'] = $route['default_controller'];
$route['^en-id$'] = $route['default_controller'];
$route['^id-id$'] = $route['default_controller'];
