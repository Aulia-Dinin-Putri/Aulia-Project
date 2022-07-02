<?php
class Chart_model extends CI_Model{
	
	public function jumlah_pegawai(){
		$this->db->group_by('jk');
		$this->db->select('jk');
		$this->db->select("count(*) as total");
		return $this->db->from('pegawai') -> get()->result();
	}
	
	public function pendidikan(){
		$this->db->group_by('pendidikan');
		$this->db->select('pendidikan');
		$this->db->select("count(*) as total");
		return $this->db->from('pegawai') -> get()->result();
	}
}
?>