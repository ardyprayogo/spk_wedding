<?php


class Model_paket extends CI_Model
{

	public function get_row()
	{
		$query = $this->db->get('paket');
		return $query->num_rows($query);
	}

	public function get_paket()
	{
		$query = $this->db->get('paket');
		return $query->result_array();
	}

	public function get_one($id)
	{
		$query = $this->db->get_where('paket', array('id_paket' => $id));
		return $query->row_array();
	}

	public function get_maxhcat()
	{
		$query	= $this->db->query("SELECT MAX(harga_catering) as maxhcat FROM paket");
		return $query->row_array();
	}

	public function get_maxhdek()
	{
		$query	= $this->db->query("SELECT MAX(harga_dekorasi) as maxhdek FROM paket");
		return $query->row_array();
	}

	public function get_maxhdok()
	{
		$query	= $this->db->query("SELECT MAX(harga_dokumentasi) as maxhdok FROM paket");
		return $query->row_array();
	}

	public function get_maxhrias()
	{
		$query	= $this->db->query("SELECT MAX(harga_rias) as maxhrias FROM paket");
		return $query->row_array();
	}

	public function get_maxhund()
	{
		$query	= $this->db->query("SELECT MAX(harga_undangan) as maxhund FROM paket");
		return $query->row_array();
	}

	public function insert_paket()
	{
		$data = array(
			'nama_paket'				=> $this->input->post('nama_paket'),
			'catering'					=> $this->input->post('catering'),
			'harga_catering'		=> $this->input->post('harga_catering'),
			'dekorasi'					=> $this->input->post('dekorasi'),
			'harga_dekorasi'		=> $this->input->post('harga_dekorasi'),
			'dokumentasi'				=> $this->input->post('dokumentasi'),
			'harga_dokumentasi'	=> $this->input->post('harga_dokumentasi'),
			'rias'							=> $this->input->post('rias'),
			'harga_rias'				=> $this->input->post('harga_rias'),
			'tamu'							=> $this->input->post('tamu'),
			'harga_undangan'		=> $this->input->post('harga_undangan')
		);

		return $this->db->insert('paket', $data);
	}

	public function update_paket($id)
	{
		$data = array(
			'nama_paket'				=> $this->input->post('nama_paket'),
			'catering'					=> $this->input->post('catering'),
			'harga_catering'		=> $this->input->post('harga_catering'),
			'dekorasi'					=> $this->input->post('dekorasi'),
			'harga_dekorasi'		=> $this->input->post('harga_dekorasi'),
			'dokumentasi'				=> $this->input->post('dokumentasi'),
			'harga_dokumentasi'	=> $this->input->post('harga_dokumentasi'),
			'rias'							=> $this->input->post('rias'),
			'harga_rias'				=> $this->input->post('harga_rias'),
			'tamu'							=> $this->input->post('tamu'),
			'harga_undangan'		=> $this->input->post('harga_undangan')
		);

		$this->db->where('id_paket', $id);
		return $this->db->update('paket', $data);
	}

	public function get_rekomendasi($b1,$b2,$b3,$b4,$b5)
	{
		$c1 		= $this->input->post('c1');
		$c2 		= $this->input->post('c2');
		$c3 		= $this->input->post('c3');
		$c4 		= $this->input->post('c4');
		$c5 		= $this->input->post('c5');
		$query 	= $this->db->query("SELECT id_paket, nama_paket, catering, dekorasi, dokumentasi, rias, tamu,
																(harga_catering/$b1)*$c1 as hcat, (harga_dekorasi/$b2)*$c2 as hdek,
															  (harga_dokumentasi/$b3)*$c3 as hdok, (harga_rias/$b4)*$c4 as hrias, (harga_undangan/$b5)*$c5
															  as hund, ((harga_catering/$b1)*$c1)+((harga_dekorasi/$b2)*$c2)+((harga_dokumentasi/$b3)*$c3)
															  +((harga_rias/$b4)*$c4)+((harga_undangan/$b5)*$c5)
															  as total FROM paket ORDER BY total DESC LIMIT 1");
		return $query->result_array();
	}

	public function delete_paket($id)
	{
		$this->db->where('id_paket', $id);
		return $this->db->delete('paket');
	}


}