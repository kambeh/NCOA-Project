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
//$route['default_controller'] = 'welcome';

// Default controller that list all books
$route['default_controller'] = 'books';

// Challenges I face is that, I could not produce route for example 'books/2' which return the book with id = 2
// I solved it by trying using the route 'books/index/$1', and its works, because the first function will called in a controller is index().

// Controller that view one book by id
$route['books/(:num)'] = 'books/index/$1';

// Controller that insert one book
$route['books/create'] = 'books/create/$1';

// Controller that update one book by id
$route['books/update/(:num)'] = 'books/update/$1';

// Controller that delete one book by id
$route['books/delete/(:num)'] = 'books/delete/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
