<?php 

class Ekstra_home extends CI_Controller {
	public function index() {
		$data['ekstra_home']= $this->m_ekstra_home->tampil_data()->result();
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/ekstra', $data);
		$this->load->view('desa/templates/footer');
	}

}

 ?>