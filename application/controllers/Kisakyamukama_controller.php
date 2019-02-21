<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kisakyamukama_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kisakyamukama_model', 'data');
    }


	public function index()
	{

		//Get
		$edit = $this->input->get('edit');

		if(!isset($edit)){
			//get data
			$data['response'] = $this->kisakyamukama_model->getUsersList();
			$data['view'] = 1;

			//load view
			$this->load->view('Kisakyamukama/user_view', $data);
		} else{
			//check submit button POST or not
			if($this->input->post('submit')  != NULL)
			{
				//	POST data
				$postData= $this->input->post();

				//Update record
				$this->kisakyamukama_model->updateUser($postData, $edit);

				redirect('user/');
			}else{
				//get data by id
				$data['response'] = $this->kisakyamukama_model->getUserById($edit);
				$data['view'] = 2;

				//loadview
				$this->load->view('Kisakyamukama/user_view', $data);
			}

		}



		// $this->load->view('welcome_message');
	}
}
