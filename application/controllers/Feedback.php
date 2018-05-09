<?php

class Feedback extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('feedback_model');
		$this->load->helper('form');
		$this->load->library('user_agent');
		$this->load->library('session');
	}
	public function index() {
		$this->load->view('data_praktikan');
	}
	public function pilih_asisten() {
		$data['nama'] = $this->input->post('nama');
		$data['nim'] = $this->input->post('nim');
		$data['kelompok'] = $this->input->post('kelompok');
		$data['jurusan'] = $this->input->post('jurusan');
		$data['asisten'] = $this->feedback_model->get_asisten_all();
		$this->load->view('pilihAsisten', $data);
	}
	public function input_data() {
		$data['nama'] = $this->input->post('nama');
		$data['nim']= $this->input->post('nim');
		$data['kelompok'] = $this->input->post('kelompok');
		$data['jurusan'] = $this->input->post('jurusan');
		$data['asisten'] = $this->input->post('asisten');
		$data['feedback'] = $this->input->post('feedback');
		$data['created_at'] = date('Y-m-d H:i:s');
		$this->feedback_model->set_feedback($data,'feedback');
		echo "thanks!";
	}
}

?>