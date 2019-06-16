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

     public function learn_captcha(){

        $this->load->helper("captcha");

        $config = array(
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url().'captcha_images/',
            'font_path'     => 'system/fonts/texb.ttf',
            'img_width'     => '260',
            'img_height'    => 150,
            'word_length'   => 12,
            'font_size'     => 22
        );

        $captcha = create_captcha($config);

        $data["cap_image"] = $captcha['image'];

        $this->load->view("show_captcha",$data);
     }

   }
