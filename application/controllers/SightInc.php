<?php

    defined("BASEPATH") OR exit("Direct script access is not allowed!");

    class SightInc extends CI_Controller{

        public function  __construct(){
            parent::__construct();
            $this->load->model("sightInc_model", "sight");
        }

        public function quote(){
            $this->load->view('SightInc/add_quote');
        }

        public function add_quote()
        {


            $this->load->helper('security');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('table','Table', 'required|trim');
            $this->form_validation->set_rules('insight', 'Insight','is_unique[Quote.insight]|is_unique[Testimony.insight]|is_unique[Idea.insight]');
            $this->form_validation->set_rules('quote', 'Quote', 'trim|xss_clean|is_unique[Quote.Quote]|min_length[5]|max_length[100]', array( 'is_unique' => 'This %s already exists.') );

            if($this->form_validation->run()){

                $table = $this->input->post('table');
                if($table == 'Quote'){
                    $quote = $this->input->post('quote');
                    $insight = $this->input->post('insight');
                    $user_id = $this->session->userdata('userID');
                    $data = array('quote'=>$quote, 'insight'=>$insight, 'added_by'=>$user_id);
                }else{
                    $title =  $this->input->post('title');
                    $insight = $this->input->post('insight');
                    $user_id = $this->session->userdata('userID');
                    $data = array('title'=>$title, 'insight'=>$insight, 'added_by'=>$user_id);
                }

                $query = $this->sightInc_model->insert($table, $data);

                if($query) $data['response'] = 'Data inserted successfully';
                else  $data['response'] = "Unable to insert data";
                $this->load->view('SightInc/quotes',$data);


            }else{
                $data['form'] = "Error encountered during field validation";
                $this->load->view('SightInc/add_quote', $data);
            }


        }

        public function view_quotes()
        {
            $this->load->view('SightInc/quotes');
        }

}
?>
