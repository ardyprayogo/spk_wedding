<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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
		if($this->session->userdata('status') === 'member' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_paket');
			$data['result']	= $this->Model_paket->get_paket();
			$data['page']		= 'dashboard';
			$data['title']	= 'Dashboard';
			$data['content']= 'member/view_dashboard';
			$this->load->view('member/template', $data);
		}
		else
		{
			redirect(site_url());
		}
	}

	public function rekomendasi()
	{
		if($this->session->userdata('status') === 'member' && $this->session->userdata('login') === TRUE)
		{
			$this->load->helper('form');
			$data['page']		= 'rekomendasi';
			$data['title']	= 'Rekomendasi Paket';
			$data['content']= 'member/view_rekomendasi';
			$this->load->view('member/template', $data);
		}
		else
		{
			redirect(site_url());
		}
	}

	public function hasil_rekomendasi()
	{
		if($this->session->userdata('status') === 'member' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_paket');
			$maxhcat				= $this->Model_paket->get_maxhcat();
			$b1 = $maxhcat['maxhcat'];
			$maxhdek				= $this->Model_paket->get_maxhdek();
			$b2 = $maxhdek['maxhdek'];
			$maxhdok				= $this->Model_paket->get_maxhdok();
			$b3 = $maxhdok['maxhdok'];
			$maxhrias				= $this->Model_paket->get_maxhrias();
			$b4 = $maxhrias['maxhrias'];
			$maxhund				= $this->Model_paket->get_maxhund();
			$b5 = $maxhund['maxhund'];
			$data['result']	= $this->Model_paket->get_rekomendasi($b1,$b2,$b3,$b4,$b5);
			
			$data['page']		= 'rekomendasi';
			$data['title']	= 'Rekomendasi Paket';
			$data['content']= 'member/view_hasilrekomendasi';
			$this->load->view('member/template', $data);
		}
		else
		{
			redirect(site_url());
		}
		
	}

	public function pesan_paket()
	{
		if($this->session->userdata('status') === 'member' && $this->session->userdata('login') === TRUE)
		{
			if($this->input->get('paket'))
			{
				$this->load->helper('form');
				$id_paket = $this->input->get('paket');
				$this->load->model('Model_paket');
				$this->load->model('Model_member');

				$data['id_paket']= $id_paket;
				$data['member']	= $this->Model_member->get_one();
				$data['paket']	= $this->Model_paket->get_one($id_paket);
				$data['page']		= 'dashboard';
				$data['title']	= 'Pilih Paket';
				$data['content']= 'member/view_pesanpaket';
				$this->load->view('member/template', $data);
			}
			else
			{
				redirect(site_url('member'));
			}
			
		}
		else
		{
			redirect(site_url());
		}
	}


	public function pemesanan()
	{
		if($this->session->userdata('status') === 'member' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_pemesanan');
			$this->Model_pemesanan->input_pemesanan();
			redirect(site_url('member'));
		}
		else
		{
			redirect(site_url());
		}
	}

	public function status()
	{
		if($this->session->userdata('status') === 'member' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_pemesanan');
			$data['pemesanan'] 	= $this->Model_pemesanan->get_one($this->session->userdata('id'));
			$data['page']				= 'status';
			$data['title']			= 'Status Pemesanan';
			$data['content']		= 'member/view_statuspemesanan';
			$this->load->view('member/template', $data);
			
		}
		else
		{
			redirect(site_url());
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}


}