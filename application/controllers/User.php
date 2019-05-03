<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->model("user_model");
        $this->load->library(array("form_validation", "session"));
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
                "rules" => "required|min_length[10]|is_unique[tbl_users.email]"
            ), array(
                "field" => "txt_phone",
                "label" => "Phone no",
                "rules" => "required"
            ), array(
                "field" => "txt_salary",
                "label" => "Salary",
                "rules" => "required"
            )
        );

        $this->form_validation->set_rules($config_rules);
        //$this->form_validation->set_rules("txt_name", "Name", "required|min_length[6]|max_length[10]|trim");
        //$this->form_validation->set_rules("txt_email", "Email", "required|min_length[10]|callback_is_email_exists");

        if ($this->form_validation->run() == FALSE) {
            // we have some errors
            $this->form_helper_study();
        } else {
            $data = $this->input->post();

            $data_array = array(
                "name" => $data["txt_name"],
                "email" => $data["txt_email"],
                "phone_no" => $data["txt_phone"],
                "salary" => $data["txt_salary"]
            );
            if ($this->user_model->insert_into_users_table($data_array)) {

                $this->session->set_flashdata("success", "User has been created successfully");

                redirect("helpers/form");
            } else {

                $this->session->set_flashdata("error", "Failed to create user");

                redirect("helpers/form");
            }
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
            $this->form_validation->set_message("is_email_exists", "Email address is needed");
            return false;
        }
    }

}
