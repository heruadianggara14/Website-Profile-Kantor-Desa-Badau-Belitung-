<?php 

class Blt_home extends CI_Controller {

	public function index() {
		$data['blt'] = $this->m_blt->tampil_data()->result();
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/blt', $data);
		$this->load->view('desa/templates/footer');
		// $this->load->view('admin/templates/footer');
	}

}
 ?>