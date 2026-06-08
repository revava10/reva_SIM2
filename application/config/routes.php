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
$route['default_controller'] = 'auth';
$route['admin'] = 'admin/index';
$route['dashboard'] = 'admin/index';
$route['dashboard_pasien'] = 'dashboard_pasien/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']='auth';
$route['login/proses']='auth/login';
$route['logout']='auth/logout';

// ================= DOKTER =================
$route['dokter'] = 'admin/dokter';
$route['dokter/tambah'] = 'admin/tambah_dokter';
$route['dokter/simpan'] = 'admin/simpan_dokter';
$route['dokter/edit/(:num)'] = 'admin/edit_dokter/$1';
$route['dokter/update/(:num)'] = 'admin/update_dokter/$1';
$route['dokter/hapus/(:num)'] = 'admin/hapus_dokter/$1';

// ================= PASIEN =================
$route['pasien'] = 'admin/pasien';
$route['pasien/tambah'] = 'admin/tambah_pasien';
$route['pasien/simpan'] = 'admin/simpan_pasien';
$route['pasien/edit/(:num)'] = 'admin/edit_pasien/$1';
$route['pasien/update/(:num)'] = 'admin/update_pasien/$1';
$route['pasien/hapus/(:num)'] = 'admin/hapus_pasien/$1';

// ================= LAPORAN =================
$route['laporan'] = 'laporan/pendaftaran';
$route['laporan/pendaftaran'] = 'laporan/pendaftaran';
$route['laporan/pasien'] = 'laporan/pasien';
$route['laporan/dokter'] = 'laporan/dokter';

// CETAK
$route['laporan/cetak/pendaftaran'] = 'laporan/cetak_pendaftaran';
$route['laporan/cetak/pasien'] = 'laporan/cetak_pasien';
$route['laporan/cetak/dokter'] = 'laporan/cetak_dokter';