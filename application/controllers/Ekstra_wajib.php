<?php 

class Ekstra_wajib extends CI_Controller {
	public function index() {
		$data['ekstra_wajib'] = $this->m_ekstra_wajib->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/ekstra_wajib', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah_aksi() {
		$nama_ekstrakulikuler		= $this->input->post('nama_ekstrakulikuler');
		$hari						= $this->input->post('hari');
		$waktu						= $this->input->post('waktu');
		$tempat						= $this->input->post('tempat');

		$data = array(
			'nama_ekstrakulikuler'	=> $nama_ekstrakulikuler,
			'hari'					=> $hari,
			'waktu'					=> $waktu,
			'tempat'				=> $tempat,
		);

		$this->m_ekstra_wajib->input_data($data, 'ekstra_wajib');
		redirect('ekstra_wajib/index'); 


	}
	
	public function hapus($id) {
		$where = array ('id' => $id);
		$this->m_ekstra_wajib->hapus_data($where, 'ekstra_wajib');
		redirect('ekstra_wajib/index');
	}

	public function edit($id) {
		$where = array ('id' => $id);
		$data['ekstra_wajib'] = $this->m_ekstra_wajib->edit_data($where, 'ekstra_wajib')->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/edit_ekstra_wajib', $data);
		$this->load->view('admin/templates/footer');
	}

	public function update() {
		$id 						= $this->input->post('id');
		$nama_ekstrakulikuler		= $this->input->post('nama_ekstrakulikuler');
		$hari						= $this->input->post('hari');
		$waktu						= $this->input->post('waktu');
		$tempat						= $this->input->post('tempat');

		$data = array(
			'nama_ekstrakulikuler'	=> $nama_ekstrakulikuler,
			'hari'					=> $hari,
			'waktu'					=> $waktu,
			'tempat'				=> $tempat,
		);

		$where = array (
			'id' => $id
		);

		$this->m_ekstra_wajib->update_data($where, $data, 'ekstra_wajib');
		redirect('ekstra_wajib/index');

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