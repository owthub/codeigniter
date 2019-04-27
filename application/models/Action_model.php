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

    public function get_where_condition_query() {

        $this->db->select("*");
        $this->db->from("users"); // tbl_users
        $this->db->where("salary >=", 4500);
        /*
         *  $this->db->where("salary >=",4500); -> greater than equal to
         *  $this->db->where("salary <=",4500); -> less than equal to
         *  $this->db->where("salary =",4500); ->  equal to
         *  $this->db->where("salary !=",4500); ->  not equal to
         *  $this->db->where("salary >",4500); ->  not equal to
         *  $this->db->where("salary <",4500); ->  not equal to
         * 
         */
        $query = $this->db->get();
        // select * from tbl_users where salary >= 4500
        return $result = $query->result();
    }

    public function get_and_condition() {

        $this->db->select("*");
        $this->db->from("users");
        /* $this->db->where(array(
          "id"=>1,
          "email"=>"onlinewebtutorhub@gmail.com1",
          )); */
        $this->db->where("id", 1);
        $this->db->or_where("email", 'onlinewebtutorhub@gmail.com1');

        $query = $this->db->get();
        return $result = $query->result();
        // select * from tbl_users where id = 1 AND email = 'onlinewebtutorhub@gmail.com'
        // select * from tbl_users where id = 1 OR email = 'onlinewebtutorhub@gmail.com'
    }

    public function get_where_in() {

        $this->db->select("*");
        $this->db->from("tbl_users");
        //$this->db->where_in("salary", array(4500, 6000, 10000));
        //$this->db->where_in("email", array('onlinewebtutorhub@gmail.com', 'ashish@gmail.com', 'sample@test.com'));
        //$this->db->like("email", "gmail.com", "none"); // gmail.com
        //$this->db->like("email", "esh", "both"); // gmail.com
        $this->db->like("email", "rahul", "after"); // rahul%
        $query = $this->db->get();
        return $result = $query->result();
    }

    public function get_user_messages() {

        // join tbl_users => id, match user_id inside tbl_messages
        $this->db->select("user.*,message.message");
        $this->db->from("tbl_users as user");
        //$this->db->join("tbl_messages as message", "user.id = message.user_id", "left");
        //$this->db->join("tbl_messages as message", "user.id = message.user_id", "right");
        $this->db->join("tbl_messages as message", "user.id = message.user_id", "inner");
        $query = $this->db->get();
        // select user.*,message.message from tbl_users as user INNER JOIN tbl_messages as message ON user.id = message.user_id
        return $result = $query->result();
    }

}
