<?php
class Student extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Student_model');
	}

	function index()
	{
		$this->load->view('product_view');
	}

	function student_data(){
		$data=$this->Student_model->student_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->Student_model->save_student();
		echo json_encode($data);
	}

	function save_subject(){
		 $number= count($this->input->post('grade',TRUE)); 
		  
		      for($i=0; $i<$number; $i++)  
		      {  
		             
		            $subject_name=$this->input->post('subject_name',TRUE)[$i];
		            $grade=$this->input->post('grade',TRUE)[$i];
		            $marks=$this->input->post('marks',TRUE)[$i];  

		            $mysql_query = "INSERT INTO suject(subject_name,grade,marks) VALUES('".$subject_name."','".$grade."','".$marks."')";
                    $query = $this->_custom_query($mysql_query);
		            
		      }  
		      echo "Data Inserted";  
		 
	}

	function _custom_query($mysql_query) 
    {
        $query = $this->db->query($mysql_query);
        return $query;
    }

	function update(){
		$data=$this->Student_model->update_student();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->Student_model->delete_student();
		echo json_encode($data);
	}

}