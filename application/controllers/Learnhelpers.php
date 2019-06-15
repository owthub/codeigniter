<?php
  class Learnhelpers extends CI_Controller{

     public function __construct(){
         parent::__construct();
         $this->load->helper(array('array','string'));
         //$this->load->helper("string");
     }

     public function string_helper(){
         //$string_random = random_string("alpha",20);
         //$string_random = random_string("alnum",20);
         //echo $string_random;

         $string = "file_1";// file_2, file_3, file_4

         //echo $string = increment_string($string); // file_2
         //echo "<br/>";
         //echo $string = increment_string($string); // file_3

         /*for ($i = 0; $i < 10; $i++)
          {
                  //echo alternator("A ","B ","C ","D ");
                  // string one, string two, string one, string two
          }*/

          echo repeater("Online Web Tutor ",10);
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
