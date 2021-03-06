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
/*Public routes*/
$route['index'] = 'Home_Controller/index';
$route['hospital'] = 'Home_Controller/add_hospital';
$route['hospital/submit'] = 'Hospital_Controller/add_hospital';



/*Admin routes*/
/*user*/
$route['login'] = 'Admin_Controller/login';
$route['login/verify'] = 'Admin_Controller/verify';
$route['logout'] = 'Admin_Controller/logout';
$route['registration'] = 'Home_Controller/registration';


/*donor*/

$route['dashboard/donors/(:num)'] = 'Admin_Controller/view_donor_details/$1';
$route['dashboard/donors/view_donor_details'] = 'Admin_Controller/view_donor_details';
$route['dashboard/donors/accept/(:num)'] = 'Admin_Controller/view_donor/$1';
$route['dashboard/donors/accept/submit'] = 'Admin_Controller/accept';
$route['dashboard/donors/reject/(:num)'] = 'Admin_Controller/reject/$1';


/*dashboard*/

$route['dashboard'] = 'Admin_Controller/dashboard';
$route['dashboard/logout'] = 'Admin_Controller/logout';
$route['dashboard/view'] = 'Admin_Controller/view';
$route['accepting'] = 'Admin_Controller/view_donor';

/*hospital*/
$route['dashboard/hospitals'] = 'Admin_Controller/view_hospitals';
$route['hregister'] = 'Hospital_Controller/hospital_registration';
$route['accepteduser'] = 'Hospital_Admin_Controller/accept';

$route['selecteduser'] = 'Hospital_Admin_Controller/view_donor';
$route['report'] = 'Lab_Controller/add_report';
$route['reportview'] = 'Lab_Controller/view';


/////////HOSPITAL ADMIN//////////////

$route['hospital-login'] = 'Hospital_Admin_Controller/login';
$route['hospital-login/verify'] = 'Hospital_Admin_Controller/verify';
$route['hospital_dashboard'] = 'Hospital_Admin_Controller/dashboard';
$route['hospital_dashboard/login'] = 'Hospital_Admin_Controller/login';
$route['hospital_dashboard/logout'] = 'Hospital_Admin_Controller/logout';


/*donor*/
$route['hospital_dashboard/donors'] = 'Hospital_Admin_Controller/index';
$route['hospital_dashboard/donor/(:num)'] = 'Hospital_Admin_Controller/view_donor/$1';
$route['hospital_dashboard/donor/token'] = 'Hospital_Admin_Controller/add_tocken';

/*lab*/
$route['hospital_dashboard/lab'] = 'Hospital_Admin_Controller/view_lab_request';
$route['hospital_dashboard/lab/make_report/submit'] = 'Lab_Controller/add_report_submit';

/*report*/

$route['hospital_dashboard/lab/make_report/(:num)'] = 'Lab_Controller/make_lab_report/$1';
$route['hospital_dashboard/report'] = 'Hospital_Admin_Controller/view_report';


/////////////////////////////////////
/*donors*/
$route['dashboard/donors'] = 'Admin_Controller/view';



/*appication routes*/
$route['default_controller'] = 'Home_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;