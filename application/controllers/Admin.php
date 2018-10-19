<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_paket');
			$this->load->model('Model_member');
			$this->load->model('Model_pemesanan');
			$data['jmlpkt']	= $this->Model_paket->get_row();
			$data['jmlmember']	= $this->Model_member->get_row();
			$data['jmlpemesanan']	= $this->Model_pemesanan->get_row();
			$data['title']	= 'Dashboard';
			$data['page']		= 'dashboard';
			$data['content']= 'admin/view_dashboard';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url());
		}
	}

	public function member()
	{
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_member');
			$data['result']	= $this->Model_member->get_member();
			$data['title']	= 'Member';
			$data['page']		= 'member';
			$data['content']= 'admin/view_member';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url());
		}
	}

	public function paket()
	{
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_paket');
			$data['result']	= $this->Model_paket->get_paket();
			$data['title']	= 'Paket';
			$data['page']		= 'paket';
			$data['content']= 'admin/view_paket';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url());
		}
	}

	public function pemesanan()
	{
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_pemesanan');
			$data['result']	= $this->Model_pemesanan->get_pemesanan();
			$data['title']	= 'Pemesanan';
			$data['page']		= 'pemesanan';
			$data['content']= 'admin/view_pemesanan';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url());
		}
	}

	public function input_paket()
	{
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('catering', 'Catering', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_catering', 'Harga Catering', 'required|is_natural',
				array('required' 		=> '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));
			$this->form_validation->set_rules('dekorasi', 'Dekorasi', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_dekorasi', 'Harga Dekorasi', 'required|is_natural',
				array('required' => '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));;
			$this->form_validation->set_rules('dokumentasi', 'Dokumentasi', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_dokumentasi', 'Harga Dokumentasi', 'required|is_natural',
				array('required' => '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));
			$this->form_validation->set_rules('rias', 'Rias', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_rias', 'Harga Rias', 'required|is_natural',
				array('required' => '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));
			$this->form_validation->set_rules('tamu', 'Jumlah Tamu', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_undangan', 'Undangan', 'required|is_natural',
				array('required' => '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));

			if($this->form_validation->run() === FALSE)
			{
				$data['title']	= 'Input Paket';
				$data['page']		= 'paket';
				$data['content']= 'admin/view_inputpaket';
				$this->load->view('admin/template', $data);
			}
			else
			{
				$this->load->model('Model_paket');
				$this->Model_paket->insert_paket();
				redirect(site_url('admin/paket'));
			}
		}
		else
		{
			redirect(site_url());
		}
		
	}

	public function update_paket()
	{
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('catering', 'Catering', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_catering', 'Harga Catering', 'required|is_natural',
				array('required' 		=> '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));
			$this->form_validation->set_rules('dekorasi', 'Dekorasi', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_dekorasi', 'Harga Dekorasi', 'required|is_natural',
				array('required' => '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));;
			$this->form_validation->set_rules('dokumentasi', 'Dokumentasi', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_dokumentasi', 'Harga Dokumentasi', 'required|is_natural',
				array('required' => '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));
			$this->form_validation->set_rules('rias', 'Rias', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_rias', 'Harga Rias', 'required|is_natural',
				array('required' => '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));
			$this->form_validation->set_rules('tamu', 'Jumlah Tamu', 'required',
				array('required' => '%s tidak boleh kosong.'));
			$this->form_validation->set_rules('harga_undangan', 'Undangan', 'required|is_natural',
				array('required' => '%s tidak boleh kosong.',
							'is_natural'	=> 'Harap periksa kembali.'));
			$this->load->model('Model_paket');
			$id = $this->uri->segment(3);
			if($this->form_validation->run() === FALSE)
			{	
				$data['paket']	= $this->Model_paket->get_one($id);
				$data['title']	= 'Update Paket';
				$data['page']		= 'paket';
				$data['content']= 'admin/view_updatepaket';
				$this->load->view('admin/template', $data);
			}
			else
			{
				$this->Model_paket->update_paket($id);
				redirect(site_url('admin/paket'));
			}
		}
		else
		{
			redirect(site_url());
		}
	}

	public function konfirmasi()
	{
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_pemesanan');
			$this->Model_pemesanan->konfirmasi();
			redirect(site_url('admin/pemesanan'));
		}
		else
		{
			redirect(site_url());
		}
	}

	public function laporan()
	{
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			$this->load->model('Model_pemesanan');
			$data['result']	= $this->Model_pemesanan->laporan();
			$data['title']	= 'Laporan';
			$data['page']		= 'laporan';
			$data['content']= 'admin/view_laporan';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url());
		}
	}
	

	public function delete_paket()
	{
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			if($this->uri->segment(3) === FALSE)
			{
				redirect(site_url('admin/paket'));
			}
			else
			{
				$id = $this->uri->segment(3);
				$this->load->model('Model_paket');
				$this->Model_paket->delete_paket($id);
				redirect(site_url('admin/paket'));
			}
		}
		else
		{
			redirect(site_url());
		}
	}


	public function delete_member()
	{
		if($this->session->userdata('status') === 'admin' && $this->session->userdata('login') === TRUE)
		{
			if($this->uri->segment(3) === FALSE)
			{
				redirect(site_url('admin/member'));
			}
			else
			{
				$id = $this->uri->segment(3);
				$this->load->model('Model_member');
				$this->Model_member->delete_member($id);
				redirect(site_url('admin/member'));
			}
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