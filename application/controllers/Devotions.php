<?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        class Devotions extends CI_Controller{

            public function __construct()
            {
                parent::__construct();
                $this->load->model('devotion_model', 'info');
            }



            public function index()
            {
                $this->load->view('devotion/devotions');

                $this->db->set('view_count', 'view_count+1', FALSE);
                $this->db->where('devotionId', 1);
                $this->db->update('devotions');                
            }


            public function add_devotion()
            {   
                //one method loads view and handles submission hene need to specify
                if($this->input->post('submit') == null) //load form to add devotion
                    $this->load->view('devotion/add_devotion');
                else{
                    // process and submit post
                    $data =array(
                        'title' =>$this->input->post('title'),
                        'scripture' =>$this->input->post('scripture'),
                        'lessons' =>$this->input->post('lessons')
                    );

                    $this->db->insert('devotions', $data);
                    redirect('faith/index');


                }              
                    
            }
        }
?>