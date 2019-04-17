<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model("site_model");
    }

    public function index() {

        $message = $this->site_model->run_my_query();

        $info_array = array(
            "name" => "Online Web Tutor",
            "email" => "onlinewebtutorhub@gmail.com",
            "author" => "Sanjay Kumar",
            "message" => $message
        );

        //$this->load->view("include/header"); // header section
        //$this->load->view("site/site_index"); // body section
        //$this->load->view("include/footer",$info_array); // footer
        $this->load->view("home_page", $info_array);
    }

    public function pass_var() {

        /* $info_array = array(
          "organisation_name" => "Online Web Tutor",
          "author_name" => "Sanjay Kumar",
          "email" => "onlinewebtutorhub@gmail.com"
          ); */

        /* $info_array["organisation_name"] = "Online Web Tutor";
          $info_array["author_name"] = "Sanjay Kumar";
          $info_array["email"] = "onlinewebtutorhub@gmail.com"; */

        //$this->load->view("site/pass_variable", $info_array);
        $this->load->view("site/pass_variable", array(
            "organisation_name" => "Online Web Tutor",
            "author_name" => "Sanjay Kumar",
            "email" => "onlinewebtutorhub@gmail.com"
        ));
    }

    public function about() {

        $this->load->view("site/site_about");
    }

    public function contact_info() {

        echo "<h1>This is contact us page</h1>";
    }

    public function product($name = "") {
        echo "<h3>Product name: </h3>" . $name;
    }

    public function service($id = "", $name = "") {

        echo "<h3>This is our service page</h3><p>ID: " . $id . " AND Service Name: " . $name;
    }

    // insert data into db table
    function insert_data_into_table() {

        $data = array(
            "name" => "Sanjay Kumar",
            "email" => "sanjay@gmail.com",
            "phone_no" => "132654892"
        );

        echo $this->site_model->insert_table_data($data);
    }

}
