<?php 

class M_foto extends CI_Model {
	public function tampil_data() {
		return $this->db->get('foto');
	}

	public function input_data($data){
  		return $this->db->insert('foto', $data);
 	}  

 	public function hapus_data($where, $table) {
 		$this->db->where($where);
 		$this->db->delete($table);
 	}

 	public function tampil_image() {
		return $this->db->get('foto');
	}

 	// public function edit_data($where, $table) {
 	// 	return $this->db->get_where($table, $where);
 	// }

 	// public function update_data($where, $data, $table) {
 	// 	$this->db->where($where);
 	// 	$this->db->update($table, $data);
 	// }

 	// public function detail_data($id = NULL) {
 	// 	$query = $this->db->get_where('tb_mahasiswa', array('id' => $id))->row();
 	// 	return $query;
 	// }
}