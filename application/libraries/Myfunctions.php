<?php

class Myfunctions{

  public $ci;

   public function __construct(){

     $this->ci = & get_instance();
   }

   public function my_base_url(){
       $this->ci->load->helper("url");

       return base_url();
   }

   public function my_session_store($key,$value){

      $this->ci->load->library("session");
      $this->ci->session->set_userdata($key,$value);

   }

   public function my_session_get($key){
     $this->ci->load->library("session");
     return $this->ci->session->userdata($key);
   }

   function my_all_session_data(){
      $this->ci->load->library("session");

      return $this->ci->session->all_userdata();
   }

    function my_upper_case($string){

        return strtoupper($string);
    }

    function remove_space($string){

        // $string = sanjay kumar
        // $string = Sanjay_Kumar => sanjay_kumar

        $string = str_replace(" ","_",$string);
        return $string = strtolower($string);
    }
}

 ?>
