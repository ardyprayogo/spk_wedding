<?php

class Model_admin extends CI_Model
{

	public function ceklogin()
	{
		$id 	 	= $this->input->post('id');
		$pass 	= md5($this->input->post('pass'));
		$status = $this->input->post('status');
		$query	= $this->db->query("SELECT * FROM $status WHERE id_admin = '$id' AND password = '$pass'");
		return $query->num_rows();
	}

}