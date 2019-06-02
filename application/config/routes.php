<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// session library routes
$route["add-session"] = "mysession/add_session";
$route["get-sessions"] = "mysession/get_session";
$route["remove-session"] = "mysession/remove_session";

// file upload library routes
$route["form-upload"] = "myupload/my_upload_form";
$route["submit-file"] = "myupload/upload_my_files";

//echo date("Ymdhis");
$route["my-uri"] = "myuri";
$route["my-segment"] = "myuri/my_segments";
