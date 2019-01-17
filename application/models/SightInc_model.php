<?php

        class sightInc_model extends  CI_Model{

            public function __construct(){
                parent::__construct();
            }

            public function insert($table, $data)
            {
                $query = $this->db->insert($table,$data);
                if($query) return true;
                else return false;
            }
            
            public function retrieve($user, $table)
            {
                $this->db->where('added_by', $user);
                $query = $this->db->get($table);
                return $query->result();
            }






        }





?>