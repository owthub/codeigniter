<?php
  class Learnhelpers extends CI_Controller{

     public function __construct(){
         parent::__construct();
         $this->load->helper('array');
     }

     public function helper_class(){

        // element => array helper method
        $student_array = array(
          "name" => "Sanjay Kumar",
          "email" => "sanjay@gmail.com",
          "roll_no" => 21
        );

        //echo element("phone_no",$student_array,"1234567890");
        //echo element("email",$student_array);
        //$data = elements(array("email","roll_no","phone_no"),$student_array,"1234567890");
        //print_r($data);

        $info_array = array(
          "Apple",
          "Pine apple",
          "Mango"
        );

        echo random_element($info_array);
     }

   }
