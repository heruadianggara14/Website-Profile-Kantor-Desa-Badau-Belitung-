<?php 

class Berita_admin extends CI_Controller {

 public function index() {
     $data['berita'] = $this->m_berita->tampil_data()->result();
     $this->load->view('admin/templates/header');
     $this->load->view('admin/templates/sidebar');
     $this->load->view('admin/berita', $data);
     $this->load->view('admin/templates/footer');
 }

 public function tambah_aksi() {
     $judul      = $this->input->post('judul');
     $deskripsi  = $this->input->post('deskripsi');
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
		}

     $data = array(
         'judul'         => $judul,
         'deskripsi'     => $deskripsi,
         'foto'          => $foto
     );

     $this->m_berita->input_data($data, 'berita');
     redirect('berita_admin');


 }
    
 public function hapus($id) {
     $where = array ('id' => $id);
     $this->m_berita->hapus_data($where, 'berita');
     redirect('berita_admin/index');
 }

 public function edit($id) {
     $where = array ('id' => $id);
     $data['berita'] = $this->m_berita->edit_data($where, 'berita')->result();

     $this->load->view('admin/templates/header');
     $this->load->view('admin/templates/sidebar');
     $this->load->view('admin/edit_berita', $data);
     $this->load->view('admin/templates/footer');
 }

 public function update() {
     $id         = $this->input->post('id');
     $judul      = $this->input->post('judul');
     $deskripsi  = $this->input->post('deskripsi');
     $foto       = $_FILES['foto'];
        if ($foto=''){}else{
            $config['upload_path']      = './assets/foto_berita';
            $config['allowed_types']    = 'jpg|png|jpeg|mp4';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal"; die();
            }else{
                $foto=$this->upload->data('file_name');
            }
        }

     $data = array(
         'judul'         => $judul,
         'deskripsi'     => $deskripsi,
         'foto'          => $foto
     );
     $where = array (
         'id' => $id
     );
     $this->m_berita->update_data($where, $data, 'berita');
     redirect('berita_admin/index');

 	}


    

 	// public function t_b(){
  //       $this->load->view('admin/templates/header');
  //       $this->load->view('admin/templates/sidebar');
  //       $this->load->view('admin/tambah_berita');

  //   }
}

 ?>

