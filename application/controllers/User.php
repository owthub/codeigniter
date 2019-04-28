<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array("form", "url"));
    }

    public function form_helper_study() {

        echo base_url();
        echo "<br/>";
        echo site_url();
        $this->load->view("user/form");
    }

    public function form_submit_method() {
        // we are going to take data from our form
        $data = $this->input->post();
        //$data = $this->input->get();
        echo "<h4>Form data</h4>";
        echo $data["txt_name"] . " , " . $data["txt_email"];
    }

}
