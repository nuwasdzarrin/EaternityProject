<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct (){
		parent::__construct();
	$this->load->model('m_blog');
	}

public function index()
	{
		$id = $this->uri->segment(2);
		echo $id;
    	//$data['refer']= $this->m_blog->GetRumah($id);
    	//$data['blog'] = $this->m_blog->GetProduk($id);
    	//$this->template->load('static','detail',$data);
	}
	public function profil() {
    $id = $this->uri->segment(3);
   	$data['refer']= $this->m_blog->GetRumah($id);
    $data['blog'] = $this->m_blog->GetProduk($id);
    $this->template->load('static','detail',$data);
  }
  public function faq() {
    $this->template->load('static','faq');
  }
  public function search() {
  	$pencarian=$this->input->post('pencarian');
  	$hasil['data'] = $this->m_blog->search($pencarian);

    $this->template->load('static','search',$hasil);
  }
}