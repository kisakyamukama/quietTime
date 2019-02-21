<?php

        defined('BASEPATH') OR exit('No direct scrip access allowed');

        class Qt_controller extends CI_Controller{

            public function __construct()
            {
                parent::__construct();
                $this->load->model('qt_model', 'info');

            }

            function index()
            {
                // $this->load->view('login');
                $this->load->view('qt/index');
            }

            function signin()
            {

                //access user input
                $username = $this->input->post('uname');
                $pass     = $this->input->post('pass');
               // $check     = $this->input->post('check');

               if( $username && $pass){
                        $data= array(
                            'username' => $username,
                            'password' => $pass
                        );


                     //   $this->load->model('qt_model'); model was loaded automatically
                        $user = $this->qt_model->login($data);

                        if($user)
                        {
                            $user_data = $this->qt_model->select('users','username', $username);

                            foreach($user_data as $row)
                            {
                                $userID =$row->id;
                                $un=$row->username;

                            }
                            $this->session->set_userdata(array('username'=>$un, 'userID'=>$userID));
                            $this->load->view('devotion/devotions');
                        }else{
                            $this->invalid();
                        }
                }else{
                    $this->invalid();
                }

            }

            private function invalid()
            {
                $data['error'] = 'invalid username or password.. click login to try again';
                $this->load->view('login', $data);

            }

            public function logout()
            {
                $this->session->unset_userdata('user');
                redirect('qt_controller/index');
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
                        'lessons' =>$this->input->post('lessons'),
                        'added_by'=>$this->session->userdata('userID')
                    );

                    $query = $this->insert('devotions', $data); //call function to insert data into database

                    if($query){ //check if data was inserted
                        $this->view_devotions();
                       // $this->session->set_flashdata('success', 'Stations info was deleted successfully!');
                    } else  exit('Error unable to insert data'); //need to read more  on this how to handle failures
                }

            }

            //function data call the store function in the model
            private function insert($table, $data)
            {
                $query = $this->qt_model->store($table, $data);

                if($query)
                    return true;
                    else
                        return false;
            }


            //function that call the devotion view
            public function view_devotions()
            {
                $this->load->view('devotion/devotions');
            }

            public function add_user()
            {

                $this->load->helper('security');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('fname', 'First name', 'required|trim|min_length[4]|max_length[16]');
                $this->form_validation->set_rules('lname', 'Last name', 'required|trim|min_length[4]|max_length[16]');
                $this->form_validation->set_rules('uname', 'Username', 'trim|xss_clean|is_unique[users.username]|min_length[5]|max_length[15]',
                 array('required' =>'You have not provided %s.', 'is_unique' => 'This %s already exists.') );
                $this->form_validation->set_message('is_unique', 'username already exists, try another one');//another way to set message for error
                $this->form_validation->set_rules('residence', 'Residence', 'required|trim|min_length[4]|max_length[18]');
                $this->form_validation->set_rules('zip', 'Zip', 'required|trim|min_length[3]|max_length[5]');
                $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
                $this->form_validation->set_rules('pwd', 'Password', 'required|trim');
                $this->form_validation->set_rules('cpwd', 'Confirm Password', 'required|trim|matches[pwd]');

                $fname = $this->input->post('fname');
                $lname = $this->input->post('lname');
                $username = $this->input->post('uname');
                $residence = $this->input->post('residence');
                $zip_code = $this->input->post('zip');
                $gender = $this->input->post('gender');
                $pwd = $this->input->post('pwd');



                    if($this->form_validation->run()){
                    $data = array(
                        'first_name'=>$fname,
                        'last_name' =>$lname,
                        'username'=>$username,
                        'residence'=>$residence,
                        'zip_code' =>$zip_code,
                        'gender'=>$gender,
                        'password'=>$pwd
                    );

                    $query = $this->insert('users', $data);
                    if($query) $data['form'] ="Data inserted successfully"; else $data['form'] ="Error in insering data into database";
                    $this->load->view('login', $data);

                }else{
                    $data['form'] = "Error encountered during field validation";
                    $this->load->view('login', $data);

                }


            }


        }


?>
