<?php 

        class Qt_model extends CI_Model{

            public function __construct(){
                parent::__construct();
            }

            public function login($access)
            {             
               $this->db->where('username', $access['username']);
               $this->db->where('password', $access['password']);

               $query = $this->db->get('users');

               if($query->num_rows() == 1) return true;
               else return false;
               

            }


            public function get_data($user)
            {
                if($user !=3)                
                $this->db->where('added_by', $user);
                //$this->db->count_all('devotions');
                $query = $this->db->get('devotions');
                return $query->result();

            }

            //insert data into database
            public function store($table, $data)
            {
                $query = $this->db->insert($table,$data);
                if($query) return true;
                else return false;
            }

            public function select($table,$field, $field_data)
            {
                
                $this->db->where($field, $field_data);
                $query=$this->db->get($table);
                return $query->result();
                

            }

            public function adminSelect($table)
            {
                $query = $this->db->get($table);
                return $query->result();
            }

          
        }



















?>