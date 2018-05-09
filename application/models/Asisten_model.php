<?php

class Asisten_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	public function get_asisten() {
		$query = $this->db->get('asisten');
		return $query->result_array();
	}
	public function get_asisten_only($kode) {
		$query = $this->db->get_where('asisten',array('kode' => $kode));
		return $query->result_array();
	} 
	public function get_asisten_cowo_2015() {
		$query = $this->db->get_where('asisten', array('kategori' => '2015_cowo'));
		return $query->result_array();
	}
	public function set_asisten($data,$table) {
		$this->db->insert($table,$data);
	}
	public function update_asisten($data,$table) {
		$this->db->where('kode',$data['kode']);
		$this->db->update($table,$data);
	}
} 

?>