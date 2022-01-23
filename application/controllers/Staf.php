<?php 

class Staf extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('m_staf');
	// }
	

	public function index() {
		$data['staf'] = $this->m_staf->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/staf', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah_aksi() {
		$Nama		= $this->input->post('Nama');
		$Gender		= $this->input->post('Gender');
		$Jabatan	= $this->input->post('Jabatan');
		$data = array(
			'Nama'			=> $Nama,
			'Gender'		=> $Gender,
			'Jabatan'		=> $Jabatan,
		);
		$this->m_staf->input_data($data, 'staf');
		redirect('Staf/index'); 
	}
	public function hapus($id) {
		$where = array ('id' => $id);
		$this->m_staf->hapus_data($where, 'staf');
		redirect('Staf/index');
	}
	public function edit($id) {
		$where = array ('id' => $id);
		$data['Staf'] = $this->m_staf->edit_data($where, 'staf')->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/edit', $data);
		$this->load->view('admin/templates/footer');
	}
	public function update() {
		$id 		= $this->input->post('id');
		$Nama		= $this->input->post('Nama');
		$Gender		= $this->input->post('Gender');
		$Jabatan	= $this->input->post('Jabatan');

		$data = array(
			'Nama'			=> $Nama,
			'Gender'		=> $Gender,
			'Jabatan'		=> $Jabatan,
		);
		$where = array (
			'id' => $id
		);
		$this->m_staf->update_data($where, $data, 'Staf');
		redirect('Staf/index');
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