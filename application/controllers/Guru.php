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
		redirect('staf/index'); 


	}
	
	public function hapus($id) {
		$where = array ('id' => $id);
		$this->m_staf->hapus_data($where, 'staf');
		redirect('staf/index');
	}

	public function edit($id) {
		$where = array ('id' => $id);
		$data['staf'] = $this->m_staf->edit_data($where, 'staf')->result();

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

		$this->m_staf->update_data($where, $data, 'staf');
		redirect('staf/index');

	}

}