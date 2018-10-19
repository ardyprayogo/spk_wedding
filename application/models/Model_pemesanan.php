<?php

class Model_pemesanan extends CI_Model
{

	public function get_row()
	{
		$query = $this->db->get('pemesanan');
		return $query->num_rows($query);
	}

	public function input_pemesanan()
	{
		$data	= array(
			'id_paket'	=> $this->input->post('id_paket'),
			'id_member'	=> $this->session->userdata('id'),
			'tanggal_pesan'	=> date('Y-m-d'),
			'tanggal_acara'	=> $this->input->post('tglacara'),
			'status_pemesanan'	=> 'menunggu'
		);
		return $this->db->insert('pemesanan', $data);
	}

	public function konfirmasi()
	{
		$data	= array(
			'status_pemesanan'	=> $this->input->get('konfirmasi')
		);
		$this->db->where('id_pemesanan', $this->input->get('id'));
		return $this->db->update('pemesanan', $data);
	}

	public function get_one($id)
	{
		$query = $this->db->query("SELECT pemesanan.id_pemesanan, paket.id_paket, pemesanan.id_member, member.nama_member, 
			pemesanan.tanggal_pesan, 
			pemesanan.tanggal_acara, pemesanan.status_pemesanan, paket.id_paket, paket.nama_paket, paket.harga_catering, 
			paket.harga_dekorasi, paket.harga_dokumentasi, paket.harga_rias, paket.harga_undangan,
			(paket.harga_catering+paket.harga_dekorasi+paket.harga_dokumentasi+paket.harga_rias+paket.harga_undangan) AS total
			FROM pemesanan JOIN member ON pemesanan.id_member = member.id_member
			JOIN paket ON pemesanan.id_paket = paket.id_paket
			WHERE pemesanan.id_member = '$id'");
		return $query->result_array();
	}

	public function get_pemesanan()
	{
		$query = $this->db->get('pemesanan');
		return $query->result_array();
	}

	public function laporan()
	{
		$query = $this->db->query("SELECT pemesanan.id_pemesanan, paket.id_paket, pemesanan.id_member, member.nama_member, 
			pemesanan.tanggal_pesan, 
			pemesanan.tanggal_acara, pemesanan.status_pemesanan, paket.id_paket, paket.nama_paket, paket.harga_catering, 
			paket.harga_dekorasi, paket.harga_dokumentasi, paket.harga_rias, paket.harga_undangan,
			(paket.harga_catering+paket.harga_dekorasi+paket.harga_dokumentasi+paket.harga_rias+paket.harga_undangan) AS total
			FROM pemesanan JOIN member ON pemesanan.id_member = member.id_member
			JOIN paket ON pemesanan.id_paket = paket.id_paket");
		return $query->result_array();
	}

}