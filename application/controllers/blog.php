<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct (){
		parent::__construct();
	$this->load->model('m_blog');
	}

	public function index()
	{
		$data['blog'] = $this->m_blog->GetBlog();
		$this->template->load('static','blog', $data);
	}

	public function readmore(){
		$id = $this->uri->segment(3);
		$data['blog'] = $this->m_blog->GetBlogSingle($id);
		$this->template->load('static','blogsingle',$data);
	}
}
