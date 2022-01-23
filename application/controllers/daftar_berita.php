<?php 

class Daftar_berita extends CI_Controller {

	public function index() {
		$data['berita'] = $this->m_berita->tampil_data()->result();
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/dftr_kgtn', $data);
		$this->load->view('desa/templates/footer');
		// $this->load->view('admin/templates/footer');
	}

}
 ?>