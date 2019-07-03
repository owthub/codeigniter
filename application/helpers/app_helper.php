<?php

if(!function_exists("get_string_length")){

  function get_string_length($string){

    return strlen($string);
  }
}

if(! function_exists("convert_to_uppercase")){

  function convert_to_uppercase($string){

    return strtoupper($string);
  }
}

if(!function_exists("get_all_books")){

  function get_all_books(){
    // write query to get all books from table
     $ci =& get_instance();

     $ci->load->database();

     $ci->db->select("*");
     $ci->db->from("books");
     $query = $ci->db->get();

     $result = $query->result();

     return $result;
  }
}
