<?php 

class Ekstra_pilihan extends CI_Controller {
	public function index() {
		$data['ekstra_pilihan'] = $this->m_ekstra_pilihan->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/ekstra_pilihan', $data);
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

		$this->m_ekstra_pilihan->input_data($data, 'ekstra_pilihan');
		redirect('ekstra_pilihan/index'); 


	}
	
	public function hapus($id) {
		$where = array ('id' => $id);
		$this->m_ekstra_pilihan->hapus_data($where, 'ekstra_pilihan');
		redirect('ekstra_pilihan/index');
	}

	public function edit($id) {
		$where = array ('id' => $id);
		$data['ekstra_pilihan'] = $this->m_ekstra_pilihan->edit_data($where, 'ekstra_pilihan')->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/edit_ekstra_pilihan', $data);
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

		$this->m_ekstra_pilihan->update_data($where, $data, 'ekstra_pilihan');
		redirect('ekstra_pilihan/index');

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