<?php 

class Guru_home extends CI_Controller {

	public function index() {
		$data['guru'] = $this->m_guru->tampil_data()->result();
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/daftarstaf', $data);
		$this->load->view('desa/templates/footer');
	}
}

 ?>