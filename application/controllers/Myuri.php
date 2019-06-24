<?php
   class Myuri extends CI_Controller{

      public function __construct(){
          parent::__construct();
          $this->load->library(array("user_agent","myfunctions")); // $this->agent->
          ///$this->load->library("myfunctions");
      }

       public function index(){

            if($this->agent->is_browser()){
               echo "<h3>Browser name: ".$this->agent->browser()." , Version: ".$this->agent->version()."</h3>";
            }elseif($this->agent->is_mobile()){
               echo $this->agent->mobile();
            }

            echo "<br/>".$this->agent->platform();
       }

       public function my_segments(){

           echo $this->uri->segment(5,"No Segment exists");
       }

       function run(){

           //echo $this->myfunctions->my_upper_case("online web tutor");
           //echo "<br/><br/>";
           //echo $this->myfunctions->remove_space("online web tutor");

echo $this->myfunctions->my_base_url();
//$this->myfunctions->my_session_store("email","acbd@gmail.com");
//echo "<br/>";
//echo $this->myfunctions->my_session_get("email");
print_r($this->myfunctions->my_all_session_data());
       }

       public function my_html(){

          $this->load->view("input_html");
       }

       public function submit_form_data(){

          // $this->load->library(library_name)

          //$data = $this->input->post();
          //print_r($data);
          echo $this->input->post("txt_name");
          echo '<br/>';
          echo $this->input->post("txt_email");

       }



   }
 ?>
