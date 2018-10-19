<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('id') && $this->session->userdata('login') === TRUE)
		{
			redirect(site_url($this->session->userdata('status')));
		}
		else
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required',
				array('required'	=> '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('id_member', 'Username', 'required|is_unique[member.id_member]',
				array('required'	=> '%s tidak boleh kosong.',
							'is_unique'	=> '%s telah dipakai.'));
			$this->form_validation->set_rules('password', 'Password', 'required',
				array('required'	=> '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('alamat', 'Alamat', 'required',
				array('required'	=> '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('no_telp', 'Nomor Telpon', 'required',
				array('required'	=> '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
				array('required'	=> '%s tidak boleh kosong.',
							'valid_email'	=> 'Harap gunakan %s yang valid.'));
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->model('Model_paket');
				$data['result']	= $this->Model_paket->get_paket();
				$this->load->view('view_home', $data);
			}
			else
			{
				$this->load->model('Model_member');
				$this->Model_member->insert_member();
				redirect(site_url());
			}
		}
		
		
	}

	public function login()
	{
		$this->load->helper('form');
		// $this->load->library('form_validation');
		if($this->input->post('status') === 'member')
		{
			$this->load->model('Model_member');
			$cek = $this->Model_member->ceklogin();
			if ($cek === 1)
			{
				$newdata = array(
					'id'		=> $this->input->post('id'),
					'status'=> $this->input->post('status'),
					'login'	=> TRUE
				);
				$this->session->set_userdata($newdata);
				redirect(site_url('member'));

			}
			else
			{
				redirect(site_url());
			}
		}
		if($this->input->post('status') === 'admin')
		{
			$this->load->model('Model_admin');
			echo $cek = $this->Model_admin->ceklogin();
			if ($cek === 1)
			{
				$newdata = array(
					'id'		=> $this->input->post('id'),
					'status'=> $this->input->post('status'),
					'login'	=> TRUE
				);
				$this->session->set_userdata($newdata);
				redirect(site_url('admin'));

			}
			else
			{
				redirect(site_url());
			}
		}
		

	}

}