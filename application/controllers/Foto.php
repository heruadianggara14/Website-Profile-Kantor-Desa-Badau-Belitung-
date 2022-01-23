<?php 

class Foto extends CI_Controller {
	public function index() {
		$data['foto'] = $this->m_foto->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/foto', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah_aksi() {
		$deskripsi	= $this->input->post('deskripsi');
		$foto 		= $_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path']		= './assets/foto';
			$config['allowed_types']	= 'jpg|png|jpeg|mp4';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{
				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
			'deskripsi'		=> $deskripsi,
			'foto'			=> $foto
		);

		$this->m_foto->input_data($data, 'foto');
		redirect('foto/index'); 


	}
	
	public function hapus($id) {
		$where = array ('id' => $id);
		$this->m_foto->hapus_data($where, 'foto');
		redirect('foto/index');
	}


	public function tampilan() {
		$data['foto'] = $this->m_foto->tampil_image()->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/tampil_foto', $data);
		$this->load->view('admin/templates/footer');
	}
}