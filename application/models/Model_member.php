<?php


class Model_member extends CI_Model {

	public function get_row()
	{
		$query = $this->db->get('member');
		return $query->num_rows($query);
	}

	public function insert_member()
	{
		$data = array(
			'id_member'		=> $this->input->post('id_member'),
			'nama_member'	=> $this->input->post('nama'),
			'password'		=> md5($this->input->post('password')),
			'email'				=> $this->input->post('email'),
			'no_telp'			=> $this->input->post('no_telp'),
			'alamat'			=> $this->input->post('alamat')
		);
		return $this->db->insert('member', $data);
	}

	public function get_one()
	{
		$query = $this->db->get_where('member', array('id_member' => $this->session->userdata('id')));
		return $query->row_array();
	}

	public function get_member()
	{
		$query = $this->db->get('member');
		return $query->result_array();
	}

	public function ceklogin()
	{
		$id 	 	= $this->input->post('id');
		$pass 	= md5($this->input->post('pass'));
		$status = $this->input->post('status');
		$query	= $this->db->query("SELECT * FROM $status WHERE id_member = '$id' AND password = '$pass'");
		return $query->num_rows();
	}

	public function delete_member($id)
	{
		$this->db->where('id_member', $id);
		return $this->db->delete('member');
	}

}
