<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
		echo $this->session->userdata('isLogin');
		/*if ($this->session->userdata('isLogin')==TRUE) {
			$this->template->load('admin/static','admin/home');
		}else {
			redirect('login');
		}*/
		
	}
}
