<?php
   class Myuri extends CI_Controller{

      public function __construct(){
          parent::__construct();
          $this->load->library("user_agent"); // $this->agent->
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
   }
 ?>
