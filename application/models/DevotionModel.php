<?php
        defined('BASEPATH') OR exit('No direct access script is allowed');

        class DevotionModel extends CI_Model{

            public function __construct()
            {
                parent::__construct();
            }

            public function get_data()
            {
                $query = $this->db->get('devotions');
                return $query->result();

            }
        }




?>
