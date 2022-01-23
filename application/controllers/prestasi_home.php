<?php 

class Prestasi_home extends CI_Controller {

	public function index() {
		$data['prestasi'] = $this->m_prestasi->tampil_data()->result();
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/prestasi', $data);
		$this->load->view('desa/templates/footer');
		// $this->load->view('admin/templates/footer');
	}

}
 ?>