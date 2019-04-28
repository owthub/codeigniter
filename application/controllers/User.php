<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("form");
    }

    public function form_helper_study() {

        $this->load->view("user/form.php");
    }

    public function form_submit_method() {
        // we are going to take data from our form
        $data = $this->input->post();
        //$data = $this->input->get();
        echo "<h4>Form data</h4>";
        echo $data["txt_name"] . " , " . $data["txt_email"];
    }

}
