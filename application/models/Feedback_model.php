<?php

class Feedback_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	public function get_asisten_all() {
		$this->db->order_by('nama');
		$query = $this->db->get('asisten');
		return $query->result_array();
	}
	public function get_feedback_only($kode) {
		$query = $this->db->get_where('feedback',array('asisten' => $kode));
		return $query->result_array();
	}
	public function set_feedback($data,$table) {
		$this->db->insert($table,$data);
	}
}
?>