<?php 

class Pengumuman_home extends CI_Controller {

	public function index() {
		$data['pengumuman'] = $this->m_pengumuman->tampil_data()->result();
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/pengumuman', $data);
		$this->load->view('desa/templates/footer');
		// $this->load->view('admin/templates/footer');
	}

}
 ?>