<?php 

class Staf_home extends CI_Controller {

	public function index() {
		$data['staf'] = $this->m_staf->tampil_data()->result();
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/daftarGuruDll', $data);
		$this->load->view('desa/templates/footer');
	}
}

 ?>