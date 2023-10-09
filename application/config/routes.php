<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['blog/(:any)'] = 'Blog/read/$1';

$route['404_override'] = 'notfound.php';
$route['translate_uri_dashes'] = TRUE;
