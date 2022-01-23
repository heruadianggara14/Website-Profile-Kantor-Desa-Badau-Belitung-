<?php 

class Kriktik_home extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('m_guru');
	// }
	
		public function tambah_aksi() {
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$krtksrn	= $this->input->post('krtksrn');

		$data = array(
			'nama'			=> $nama,
			'email'		=> $email,
			'krtksrn'		=> $krtksrn,
			
		);

		$this->m_kritik->input_data($data, 'kritik');
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