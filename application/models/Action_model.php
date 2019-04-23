<?php

class Action_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function select_all_data() {

        // it will select all data from table
        //$this->db->select("*");
        //$query = $this->db->get("users"); //tbl_users
        // select * from tbl_users

        /* $this->db->select("name,email");
          $this->db->from("users"); // tbl_users
          $query = $this->db->get(); */

        $this->db->select("*");
        $this->db->from("users");
        //$this->db->where("email","sanjay@gmail.com");
        $this->db->where(array(
            "id" => 2,
            "email" => "Rakesh@gmail.com"
        ));
        $query = $this->db->get();

        return $result = $query->result();
    }

    public function update_table_data() {

        $data = array(
            "name" => "Online Web Tutor",
            "email" => "onlinewebtutorhub@gmail.com",
            "phone_no" => "1231654981"
        );

        $this->db->where("id", 1);
        $this->db->update("users", $data);

        return True;
    }

    public function get_all_users_data() {

        $this->db->select("*");
        $this->db->from("users"); // tbl_users
        $this->db->where("id", 1);
        $query = $this->db->get();
        // select * from tbl_users where id = 1
        //return $result = $query->result_array();
        return $result = $query->row_array();
    }

    public function delete_specific_user() {

        //$this->db->where("id",4);
        //return $this->db->delete("users");
        // delete from tbl_users where id =4
        return $this->db->delete("users", array(
                    "id" => 3
        ));
    }

}
