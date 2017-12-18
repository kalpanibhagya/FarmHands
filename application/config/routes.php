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
$route['Blog/single']='blog/single/$1';
$route['Blog/post1']='blog/post1/$1';
$route['Blog/post2']='blog/post2/$1';
$route['Blog/post3']='blog/post3/$1';
$route['Blog/post4']='blog/post4/$1';


$route['Blog/about']='blog/about';
$route['Blog/(:any)']='posts/view/$1';
$route['Blog/delete/(:any)']='posts/delete/$1';
$route['Blog/edit/(:any)']='posts/edit/$1';
//$route['comments/create/(:any)']='comments/create/$1';
