<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'site';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["site/about-info"] = "site/about";
$route["site/contact"] = "site/contact_info";
$route["site/product/(:num)"] = "site/product/$1";
$route["site/service/(:num)/(:any)"] = "site/service/$1/$2";
$route["site/variable"] = "site/pass_var";

$route["site/insert-data"] = "site/insert_data_into_table";

$route["action/select-all"] = "action/get_all_data";
$route["action/update-date"] = "action/update_data";