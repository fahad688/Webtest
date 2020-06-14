<?php
class Student_model extends CI_Model{

	function student_list(){
		$query=$this->db->get('student');
		return $query->result();
	}

	function save_student(){
		$data = array(
				'student_name' 	=> $this->input->post('student_name'), 
				'father_name' 	=> $this->input->post('father_name'), 
				'address' => $this->input->post('address'),
				'email' => $this->input->post('email'), 
			);
		$result=$this->db->insert('student',$data);
		return $result;
	}

	function update_student(){
		$student_name=$this->input->post('student_name');
		$father_name=$this->input->post('father_name');
		$address=$this->input->post('address');
		$email=$this->input->post('email');

		$this->db->set('student_name', $student_name);
		$this->db->set('father_name', $father_name);
		$this->db->set('address', $address);
		$this->db->where('email', $email);
		$result=$this->db->update('student');
		return $result;
	}

	function delete_student(){
		$student_name=$this->input->post('student_name');
		$this->db->where('student_name', $student_name);
		$result=$this->db->delete('student');
		return $result;
	}

  function save_data($data)
  {
    $daat= $this->db->insert('ajax_practise', $data);
    return $daat;
  }

  function fetch_all_data()
  {
		$query=$this->db->get('ajax_practise');
		return $query;
  }

   function fetch_specific_data($id)
   {
   	    $this->db->where('id', $id);
		$query=$this->db->get('ajax_practise');
		return $query;
   }

   function update_date($id,$data)
   {
	    $this->db->where('id', $id);
	    $query=$this->db->update('ajax_practise', $data);
	    return $query;
   }

		
	
}