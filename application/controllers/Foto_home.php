<?php 

class Foto_home extends CI_Controller {
	public function index() {
		$data['foto'] = $this->m_foto->tampil_data()->result();
		$this->load->view('desa/foto_home', $data);
		// $this->load->view('admin/templates/footer');
		
	}
}