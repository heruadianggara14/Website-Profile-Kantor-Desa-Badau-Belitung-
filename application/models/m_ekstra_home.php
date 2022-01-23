<?php 

class M_ekstra_home extends CI_Model {

	public function tampil_data() {
		return $this->db->get('ekstra_wajib');
		return $this->db->get('ekstra_pilihan');
	}
}


 ?>