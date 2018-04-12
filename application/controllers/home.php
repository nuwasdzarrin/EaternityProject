<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct (){
		parent::__construct();
	$this->load->model('m_blog');
	}

	public function index()
	{
		$data['blog'] = $this->m_blog->GetBlog()->result();
		$this->template->load('static','eaternity', $data);
		//$this->load->view('shopper');
	}
	
	
}
