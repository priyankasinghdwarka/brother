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

/* admin routes */
$route['admin'] = 'admin/admin';
$route['admin/login'] = 'admin/admin';
$route['admin/dashboard'] = 'admin/admin/dashboard';
$route['admin/logout'] = 'admin/admin/logout';
/* admin routes */


/* front routes */
$route['products/(:any)'] = 'products/listing/$1';
$route['resetpassword/(:any)'] = 'user/resetpassword/$1';
$route['contact-us'] = 'welcome/contact_us';
$route['faq'] = 'welcome/faq';
$route['about-us'] = 'welcome/about_us';
$route['support'] = 'welcome/support';
$route['catalogs'] = 'welcome/catalogs';
/* front routes */

$route['default_controller'] = 'welcome';
$route['product-listing/(:any)'] = 'Welcome/viewproducts/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
