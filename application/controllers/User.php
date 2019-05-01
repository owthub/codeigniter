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

        $config_rules = array(
            array(
                "field" => "txt_name",
                "label" => "Name",
                "rules" => "required|min_length[6]|max_length[10]|trim"
            ),
            array(
                "field" => "txt_email",
                "label" => "Email",
                "rules" => "required|min_length[10]|callback_is_email_exists"
            )
        );
        
        $this->form_validation->set_rules($config_rules);
        //$this->form_validation->set_rules("txt_name", "Name", "required|min_length[6]|max_length[10]|trim");
        //$this->form_validation->set_rules("txt_email", "Email", "required|min_length[10]|callback_is_email_exists");

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

    public function is_email_exists($value) {

        $valid_emails = array(
            "online@gmail.com",
            "onlinewebtutor@gmail.com",
            "sanjay@gmail.com"
        );
        if (!empty($value)) {

            if (in_array($value, $valid_emails)) {

                $this->form_validation->set_message("is_email_exists", "The {field} already taken, try another email ID");
                return false;
            } else {

                return true;
            }
        } else {
            $this->form_validation->set_message("is_email_exists","Email address is needed");
            return false;
        }
    }

}
