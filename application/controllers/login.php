<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct (){
		parent::__construct();
	$this->load->model('model_user');
	
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')==1) {
			if ($this->session->userdata('level')=='admin') {
				
				redirect('admin1/c_admin');
			}
			if ($this->session->userdata('level')=='member') {
				redirect('member/c_member');
			}
		}else{
			$this->load->view('tampilan_login');
		}
	
	}

	function cek_login() {
		$username = $this->input->post('username');
		$password = ($this->input->post('password'));
		
		$hasil = $this->model_user->cek_user($username,$password);
		
		if (count($hasil) == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data = array(
				'logged_in' => 1,
				'uid' => $sess->id,
				'username' => $sess->username,
				'level' => $sess->level
				);
				
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				
				redirect('admin1/c_admin');
			}
			if ($this->session->userdata('level')=='member') {
				redirect('member/c_member');
			}
		}else{
		echo "<script>alert('gagal login')</script>";
		$this->load->view('tampilan_login');
		}
	}


	
}

