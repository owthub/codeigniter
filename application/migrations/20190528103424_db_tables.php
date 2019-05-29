<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Db_tables extends CI_Migration {

        public function up()
        {
              // table = students
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR', // varchar
                                'constraint' => '100',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'address' => array(
                                'type' => 'TEXT',
                                "null" => TRUE
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('students');

           // table = faculties
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR', // varchar
                                'constraint' => '100',
                        ),
                        'designation' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '120',
                        ),
                        'mobile' => array(
                                'type' => 'varchar',
                                "constraint" => '20',
                                "null" => TRUE
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('faculties');
        }

        public function down()
        {
                $this->dbforge->drop_table('students');

                $this->dbforge->drop_table('faculties');
        }
}
