<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Frontend_Controller';
$route['Register'] = 'Frontend_Controller/register';

$route['admin'] = 'Admin_Controller';
$route['dashboard'] = 'Admin_Controller/dashboard';
$route['logout'] = 'Admin_Controller/logout';
$route['dashboard/add-resident'] = 'Admin_Controller/addresident';
$route['dashboard/view-resident'] = 'Admin_Controller/viewresident';
$route['dashboard/delete-resident/(:any)'] = 'Admin_Controller/deleteresident/$1';
$route['dashboard/update-resident/(:any)'] = 'Admin_Controller/update_resident/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
