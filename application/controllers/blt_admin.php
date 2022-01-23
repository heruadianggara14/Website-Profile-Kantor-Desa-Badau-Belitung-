<?php 

class Blt_admin extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('m_staf');
	// }
	

	public function index() {
		$data['blt'] = $this->m_blt->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/blt', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah_aksi() {
		$nama			= $this->input->post('nama');
		$jbtn			= $this->input->post('jbtn');
		$hal_dbwa		= $this->input->post('hal_dbwa');
        $brng	    	= $this->input->post('brng');
        $jml			= $this->input->post('jml');
        $tgl			= $this->input->post('tgl');
        $jam			= $this->input->post('jam');
       

		$data = array(
			'nama'			=> $nama,
			'jbtn'			=> $jbtn,
			'hal_dbwa'		=> $hal_dbwa,
			'brng'			=> $brng,
			'jml'			=> $jml,
            'tgl'			=> $tgl,
            'jam'			=> $jam,
           
		);

		$this->m_blt->input_data($data, 'blt');
		redirect('blt_admin/index'); 


	}
	
	public function hapus($id) {
		$where = array ('id' => $id);
		$this->m_blt->hapus_data($where, 'blt');
		redirect('blt_admin/index');
	}

	public function edit($id) {
		$where = array ('id' => $id);
		$data['blt'] = $this->m_blt->edit_data($where, 'blt')->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/edit_blt', $data);
		$this->load->view('admin/templates/footer');
	}

	public function update() {
		$nama			= $this->input->post('nama');
		$jbtn			= $this->input->post('jbtn');
		$hal_dbwa		= $this->input->post('hal_dbwa');
		$brng	    	= $this->input->post('brng');
		$jml			= $this->input->post('jml');
		$tgl			= $this->input->post('tgl');
		$jam			= $this->input->post('jam');
       
		$data = array(
			'nama'			=> $nama,
			'jbtn'			=> $jbtn,
			'hal_dbwa'		=> $hal_dbwa,
			'brng'			=> $brng,
			'jml'			=> $jml,
			'tgl'			=> $tgl,
			'jam'			=> $jam,
            
		);

		$where = array('id' => $id);

		$this->m_blt->update_data($where, $data, 'blt');
		redirect('blt_admin/index');

	}


}