<?php
class Ajax_practise extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Student_model');
	}

	function index()
	{
		$this->load->view('practise_view');
	}

	function save()
	{
		$data = array(

                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'pwd' => $this->input->post('pwd'),
            );

		$result=$this->Student_model->save_data($data);
		echo json_encode($result);
	}

	function manage()
	{
		$data['query']=$this->Student_model->fetch_all_data();
		$this->load->view('manage_view',$data);
	}

	function update()
	{
		$id=$this->input->get('upd',TRUE);
		$data['query']=$this->Student_model->fetch_specific_data($id);
		$this->load->view('update_view',$data);
	}

	function updae_processes()
	{
		$data = array(

                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'pwd' => $this->input->post('pwd'),
            );
		$id=$this->input->post('id', TRUE);

		$result=$this->Student_model->update_date($id,$data);
		echo json_encode($result);
	}

	

}