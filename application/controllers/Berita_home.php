<?php 

class Berita_home extends CI_Controller {

	public function detail($id) {
		$this->load->model('m_berita');
		$detail	= $this->m_berita->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('desa/templates/header_nav');
		$this->load->view('desa/berita_home', $data);
		$this->load->view('desa/templates/footer');
	}


}
?>