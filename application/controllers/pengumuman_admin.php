<?php 

class Pengumuman_admin extends CI_Controller {

 public function index() {
     $data['pengumuman'] = $this->m_pengumuman->tampil_data()->result();
     $this->load->view('admin/templates/header');
     $this->load->view('admin/templates/sidebar');
     $this->load->view('admin/pengumuman', $data);
     $this->load->view('admin/templates/footer');
 }

 public function tambah_aksi() {
     $judul      = $this->input->post('judul');
   	 $foto 		= $_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path']		= './assets/foto_berita';
			$config['allowed_types']	= 'jpg|png|jpeg|mp4';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{
				$foto=$this->upload->data('file_name');
            }
            $deskripsi  = $this->input->post('deskripsi');
		}

     $data = array(
        'judul'         => $judul,
        'foto'          => $foto,
        'deskripsi'     => $deskripsi,
     );

     $this->m_pengumuman->input_data($data, 'pengumuman');
     redirect('pengumuman_admin');


 }
    
 public function hapus($id) {
     $where = array ('id' => $id);
     $this->m_pengumuman->hapus_data($where, 'pengumuman');
     redirect('pengumuman_admin/index');
 }

 
}
