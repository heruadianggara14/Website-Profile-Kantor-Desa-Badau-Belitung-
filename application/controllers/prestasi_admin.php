<?php 

class Prestasi_admin extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('m_staf');
	// }
	

	public function index() {
		$data['prestasi'] = $this->m_prestasi->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/prestasi', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah_aksi() {
		$nama_peserta		= $this->input->post('nama_peserta');
		$kejuaraan		    = $this->input->post('kejuaraan');
        $tggl_pelaksana	    = $this->input->post('tggl_pelaksana');
        $Tempat	            = $this->input->post('Tempat');
        $juara	            = $this->input->post('juara');
		$data = array(
			'nama_peserta'			=> $nama_peserta,
			'kejuaraan'		        => $kejuaraan,
            'tggl_pelaksana'		=> $tggl_pelaksana,
            'Tempat'                => $Tempat,
            'juara'                 => $juara,
		);
		$this->m_prestasi->input_data($data, 'prestasi');
		redirect('prestasi_admin/index'); 
	}
	public function hapus($id) {
		$where = array ('id' => $id);
		$this->m_prestasi->hapus_data($where, 'prestasi');
		redirect('prestasi_admin/index');
	}
	public function edit($id) {
		$where = array ('id' => $id);
		$data['prestasi'] = $this->m_prestasi->edit_data($where, 'prestasi')->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/edit_prestasi', $data);
		$this->load->view('admin/templates/footer');
	}
	public function update() {
		$id 		        = $this->input->post('id');
		$nama_peserta		= $this->input->post('nama_peserta');
		$kejuaraan		    = $this->input->post('kejuaraan');
        $tggl_pelaksana	    = $this->input->post('tggl_pelaksana');
        $Tempat	            = $this->input->post('Tempat');
        $juara	            = $this->input->post('juara');
		$data = array(
			'nama_peserta'			=> $nama_peserta,
			'kejuaraan'		        => $kejuaraan,
            'tggl_pelaksana'		=> $tggl_pelaksana,
            'Tempat'                => $Tempat,
            'juara'                 => $juara,      
		);
		$where = array (
			'id' => $id
		);
		$this->m_prestasi->update_data($where, $data, 'prestasi');
		redirect('prestasi_admin/index');

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