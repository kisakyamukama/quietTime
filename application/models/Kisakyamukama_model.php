<?php 
    defined('BASEPATH') OR exit('Erroe direct script access not allowed');

    class Kisakyamukama_model extends CI_Model{

        public function __construct(){
            parent::__construct();
        }

            //Get user by id
            public function getUsersList()
            {
                $this->db->select('*');
                $this->db->order_by('name', 'asc');
                $this->db->limit(10,0);
                $q = $this->db->get('users');
                $result = $q->result_array();
                return $result;

            }

            //update record by id
            function updateUser($postData, $id)
            {
                $name = trim($postData['txt_name']);
                $email = trim($postData['txt_email']);

                if($name != '' && $email != '')
                {
                    //update
                    $value = array('name' => $name, 'email' => $email);
                    $this->db->where('id', $id);
                    $this->db->update(`users`, $value);
                }

            }


    }














?>