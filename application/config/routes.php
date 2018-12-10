<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*

$route['productpage'] = 'productpage/index'; //product

$route['hit'] = 'hit/index'; //hit counter

$route['users'] = 'admin/index'; //user profile*

$route['mypage'] = 'members/mypage'; 

$route['products'] = 'products/index'; //product *

$route['password'] = 'members/password';	

$route['member'] = 'members/index';	 //membership *

$route['forgot'] = 'agents/forgot';	

$route['signup'] = 'agents/sign_up';	



$route['gallery'] = 'gallery/index';	

$route['videos'] = 'videos/index';

$route['posts/update'] = 'posts/update';

$route['posts/create'] = 'posts/create';

$route['posts/(:any)'] = 'posts/view/$1';

$route['posts'] = 'posts/index';



$route['articles/(:any)/(:any)'] = 'pages/view_post/$1/$1';

$route['articles/(:any)'] = 'pages/view_post/$1';

$route['contents'] = 'contents/index'; //view my page 

*/

#Start ALL Schedule#

$route['sdetail/(:any)/(:num)'] = 'sdetail/index/$1/$2';
$route['sdetail/(:any)'] = 'sdetail/index/$1';

#End Schedule#

#Start ALL Product#

$route['products/(:any)/(:any)/(:any)'] = 'allproducts/view/$1/$1/$1';

$route['products/(:any)/(:any)'] = 'allproducts/index/$1/$1';

$route['products/(:any)'] = 'allproducts/index/$1';

$route['products'] = 'allproducts/index';

#End Product#



#Start ALL Product#

$route['productpage/(:any)/(:any)/(:any)'] = 'productpage/view/$1/$1/$1';

$route['productpage/(:any)/(:any)'] = 'productpage/index/$1/$1';

$route['productpage/(:any)'] = 'productpage/index/$1';

$route['productpage'] = 'productpage/index';

#End Product#



#Start Contacts#

$route['contacts/(:any)'] = 'contacts/index/$1'; // Replica Contacts

$route['contacts'] = 'contacts/index';	

#End Contacts#



#Start Gallery/Articles#

$route['gallery/(:any)/(:any)'] = 'gallery/view/$1/$1';

$route['gallery/(:any)'] = 'gallery/index/$1'; // Replica Articles

$route['gallery'] = 'gallery/index';

#End Gallery/Articles#



#Start About#

$route['about/(:any)'] = 'about/index/$1'; // Replica About

#End About#



#Start Home#

$route['default_controller'] = 'pages/view'; // Home

$route['(:any)'] = 'pages/view_agent/$1';	// Replica Home

#End Home#

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

