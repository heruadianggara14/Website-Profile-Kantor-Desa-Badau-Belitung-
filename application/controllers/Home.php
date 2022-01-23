<?php 

class Home extends CI_Controller {

	public function index() {
		$data['berita'] = $this->m_berita->tampil_data()->result();
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/index', $data);
		$this->load->view('desa/templates/footer');
	}

	public function struktur_organisasi() {
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/StrukturOrganisasi');
	}

	public function visi_misi() {
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/VisiMisi');
		$this->load->view('desa/templates/footer');
	}

	public function denah() {
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/denah');

		// $this->load->view('sd/templates/footer');
	}

	public function tambah_aksi() {
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$krtksrn	= $this->input->post('krtksrn');

		$data = array(
			'nama'			=> $nama,
			'email'		=> $email,
			'krtksrn'		=> $krtksrn,
			
		);

		$this->m_kritik->input_data($data, 'kritik');
		redirect('home/index'); 


	}
}

 ?>