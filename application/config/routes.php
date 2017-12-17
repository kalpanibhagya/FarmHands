<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Blog/posts/create']='posts/create';
$route['Blog/update']='posts/update';
$route['Blog/recent']='posts/index';
$route['Blog/categories/create']='categories/create';
$route['Blog'] = 'blog/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['(:any)']='blog/index/$1';
$route['Blog/(:any)']='posts/view/$1';
$route['Blog/delete/(:any)']='posts/delete/$1';
$route['Blog/edit/(:any)']='posts/edit/$1';
