<?php 

class Kritik extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('m_guru');
	// }
	

	public function index() {
		$data['kritik'] = $this->m_kritik->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/kritik', $data);
		$this->load->view('admin/templates/footer');
	}


	
	public function hapus($id) {
		$where = array ('id' => $id);
		$this->m_kritik->hapus_data($where, 'kritik');
		redirect('kritik/index');
	}


	// public function detail($id) {
	// 	$this->load->model('m_mahasiswa');
	// 	$detail	= $this->m_mahasiswa->detail_data($id);
	// 	$data['detail'] = $detail;

	// 	$this->load->view('templates/header');
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('detail', $data);
	// 	$this->load->view('templates/footer');
	// }
}