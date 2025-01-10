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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'user'; 
$route['auth'] = 'auth'; 
$route['admin'] = 'admin';  
$route['admin/logout'] = 'admin/logout';
$route['admin/pengumuman'] = 'pengumuman/index';
$route['pengumuman/create'] = 'pengumuman/create';
$route['pengumuman/edit/(:any)'] = 'pengumuman/edit/$1'; 
$route['pengumuman/delete/(:any)'] = 'pengumuman/delete/$1'; 
$route['admin/kepalasekolah'] = 'kepalasekolah/index';                 
$route['kepalasekolah/create'] = 'kepalasekolah/form';             
$route['kepalasekolah/edit/(:any)'] = 'kepalasekolah/form/$1';     
$route['kepalasekolah/delete/(:any)'] = 'kepalasekolah/delete/$1';  
$route['sambutan-kepala-sekolah'] = 'kepalasekolah/detail';
$route['admin/berita'] = 'berita/index';
$route['berita/form/(:any)'] = 'berita/form/$1';  
$route['berita/form'] = 'berita/form';
$route['berita/save'] = 'berita/save';
$route['berita/delete/(:any)'] = 'berita/delete/$1';
$route['berita/detail/(:any)'] = 'berita/detail/$1';
$route['all'] = 'berita/all/';
$route['admin/ekstrakurikuler'] = 'ekstrakurikuler/index';
$route['ekstrakurikuler/form'] = 'ekstrakurikuler/form';
$route['ekstrakurikuler/form/(:any)'] = 'ekstrakurikuler/form/$1';
$route['ekstrakurikuler/delete/(:any)'] = 'ekstrakurikuler/delete/$1';
$route['ekstrakurikuler/detail/(:any)'] = 'ekstrakurikuler/detail/$1';
$route['admin/jurusan'] = 'jurusan/index';
$route['jurusan/form'] = 'jurusan/form'; 
$route['jurusan/form/(:any)'] = 'jurusan/form/$1'; 
$route['jurusan/save'] = 'jurusan/save';
$route['jurusan/delete/(:num)'] = 'jurusan/delete/$1';
$route['jurusan/detail/(:any)'] = 'jurusan/detail/$1';
$route['admin/prestasi'] = 'prestasi/index'; 
$route['prestasi/form/(:any)'] = 'prestasi/form/$1'; 
$route['prestasi/save'] = 'prestasi/save';
$route['prestasi/delete/(:num)'] = 'prestasi/delete/$1'; 
$route['admin/gurustaff'] = 'gurustaff/index';
$route['gurustaff/create'] = 'gurustaff/create';
$route['gurustaff/store'] = 'gurustaff/store';
$route['gurustaff/edit/(:num)'] = 'gurustaff/edit/$1';
$route['gurustaff/update/(:num)'] = 'gurustaff/update/$1';
$route['gurustaff/delete/(:num)'] = 'gurustaff/delete/$1';
$route['admin/kontak'] = 'kontak/index';
$route['kontak/add'] = 'kontak/add';
$route['kontak/save'] = 'kontak/save';
$route['admin/sejarah'] = 'Sejarah/index';
$route['sejarah/create'] = 'Sejarah/create';
$route['sejarah/edit/(:num)'] = 'Sejarah/edit/$1';
$route['sejarah/delete/(:num)'] = 'Sejarah/delete/$1';
$route['sejarah'] = 'Sejarah/view';
$route['admin/visimisi'] = 'VisiMisi/index'; 
$route['visimisi/create'] = 'VisiMisi/create'; 
$route['visimisi/edit/(:num)'] = 'VisiMisi/edit/$1'; 
$route['visimisi/delete/(:num)'] = 'VisiMisi/delete/$1'; 
$route['visimisi'] = 'VisiMisi/view';
$route['admin/stats'] = 'stats/index';
$route['stats/create'] = 'stats/create';
$route['stats/store'] = 'stats/store';
$route['stats/edit/(:any)'] = 'stats/edit/$1';
$route['stats/update/(:any)'] = 'stats/update/$1';
$route['stats/delete/(:any)'] = 'stats/delete/$1';
$route['admin/saranaprasarana'] = 'saranaprasarana/index';
$route['saranaprasarana/create'] = 'saranaprasarana/create';
$route['saranaprasarana/store'] = 'saranaprasarana/store';
$route['saranaprasarana/edit/(:num)'] = 'saranaprasarana/edit/$1';
$route['saranaprasarana/update/(:num)'] = 'saranaprasarana/update/$1';
$route['saranaprasarana/delete/(:num)'] = 'saranaprasarana/delete/$1';
$route['saranaprasarana'] = 'saranaprasarana/view';
$route['admin/galeri'] = 'galeri/index'; 
$route['galeri/create'] = 'galeri/create'; 
$route['galeri/store'] = 'galeri/store'; 
$route['galeri/edit/(:any)'] = 'galeri/edit/$1'; 
$route['galeri/update/(:any)'] = 'galeri/update/$1'; 
$route['galeri/delete/(:any)'] = 'galeri/delete/$1'; 
$route['galeri'] = 'galeri/view'; 
$route['admin/infoppdb'] = 'InfoPpdb/index';
$route['admin/infoppdb/create'] = 'InfoPpdb/create';
$route['admin/infoppdb/edit/(:num)'] = 'InfoPpdb/edit/$1';
$route['admin/infoppdb/delete/(:num)'] = 'InfoPpdb/delete/$1';
$route['info_ppdb'] = 'InfoPpdb/view';
$route['kritiksaran/submit'] = 'kritiksaran/submit';
$route['kritiksaran'] = 'kritiksaran/index';
$route['admin/kritiksaran'] = 'kritiksaran/list'; 
$route['search'] = 'search/index';
// application/config/routes.php
$route['admin/profile'] = 'admin/user_profile'; // Route for user profile page
$route['kritiksaran/mark_feedback_as_read/(:num)'] = 'kritiksaran/mark_feedback_as_read/$1'; 

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

