<?php

class Asisten extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('asisten_model');
		$this->load->model('feedback_model');
		$this->load->helper('form');
		$this->load->library('user_agent');
		$this->load->library('session');
		$this->load->helper('string');
	}

	public function login_asisten() {
		$this->session;
		if ($this->session->has_userdata('user')) {
			redirect('result');
		}
		$this->load->view('asisten/login');
	}
	public function prosesLogin() {
		$this->session;
		$user = $this->input->post('user');
		$password = $this->input->post('password');
		$asisten = $this->asisten_model->get_asisten();
		$count = 0;
		foreach ($asisten as $a) {
			if ($a['kode']==$user && $a['password']==$password)
				$count++;
		}
		if ($count<1) {
			echo "
			<script>
			alert('Username dan Password salah, silahkan login kembali!');
			window.location.href = 'login';
			</script>
			";
		}
		$data['user'] = $user;
		$this->session->set_userdata('user',$user);
		redirect('result');
	}

	public function logout() {
		$this->session;
		$this->session->unset_userdata('user');
		redirect('login');
	}

	public function result() {
		$this->session;
		if (!$this->session->has_userdata('user')) {
			echo "
			<script>
			alert('Anda belum login, silahkan login terlebih dahulu!');
			window.location.href = 'login';
			</script>
			";
		}
		$kode = $this->session->user;
		$asisten = $this->asisten_model->get_asisten_only($kode);
		foreach ($asisten as $a) {
			$data['kode'] = $a['kode'];
			$data['nama'] = $a['nama'];
			$data['foto'] = $a['foto'];
		}
		$data['feedback'] = $this->feedback_model->get_feedback_only($kode);
		$this->load->view('asisten/result',$data);
	}

	public function generatePasswordAsisten() {
		$asisten = $this->asisten_model->get_asisten();
		foreach ($asisten as $a) {
			$a['password'] = random_string('alnum',5);
			$this->asisten_model->update_asisten($a,'asisten');
		}
	}
	
}

?>