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
$route["custom-library"] = "myuri/run";

$route["my-input-form"] = "myuri/my_html";
$route["submit-form-data"] = "myuri/submit_form_data";

// helpers
//$route["learn-helpers"] = "learnhelpers/helper_class";

$route["learn-helpers"] = "learnhelpers/learn_captcha";

$route["my-form"] = "learnhelpers/my_form";

$route["my-captcha"] = "learnhelpers/my_captcha_form";
$route["my_captcha_submit"] = "learnhelpers/my_captcha_form_submit";

$route["my-file"] = "learnhelpers/my_file_helper";

$route["my-directory"] = "learnhelpers/my_working_directory";

$route["my-inflector"] = "learnhelpers/my_call_inflector";

$route["my-face"] = "learnhelpers/my_face_helper";

$route["my-custom-helper"] = "learnhelpers/my_use_helper";
