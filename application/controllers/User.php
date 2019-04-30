<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->library("form_validation");
    }

    public function form_helper_study() {

        //echo base_url();
        //echo "<br/>";
        //echo site_url();
        $this->load->view("user/form");
    }

    public function form_submit_method() {

        $this->form_validation->set_rules("txt_name", "Name", "required");

        $this->form_validation->set_rules("txt_email", "Email", "required");

        if ($this->form_validation->run() == FALSE) {
            // we have some errors
            $this->form_helper_study();
        } else {
            // submitted form
            // we are going to take data from our form
            $data = $this->input->post();
            //$data = $this->input->get();
            echo "<h4>Form data</h4>";
            echo $data["txt_name"] . " , " . $data["txt_email"];
        }
    }

}
