<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {

    private $owt;

    public function __construct() {
        parent::__construct();
        //$this->owt = $this->load->database("owt", TRUE);
        $this->load->database();
    }

    function run_my_query() {

        return "This is message from model file";
    }

    function insert_table_data($data) {

        //return $this->db->query("Insert into tbl_users (name,email,phone_no) Values ('Sample','sample@gmail.com','2316546121')");

        ///return $this->owt->insert("tbl_books", $data);
        //return $this->db->insert("tbl_users", $data);
    }

}
