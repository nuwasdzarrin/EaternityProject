<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Blog extends CI_Model {

	var $tabel = 'rumahmakan';
	var $produk = 'produk';
	public function GetBlog(){
		$blog=$this->db->select('*')
						->from('rumahmakan')
						->order_by('id','desc')
						->get();
		return $blog;
	}
	
	public function GetBlogSingle($id){
		$single = $this->db->select('*')
							->from('rumahmakan')
							->where('id',$id)
							->get();
		return $single;
	}
	function addpage($data){

       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
    function addproduk($data){

       $this->db->insert($this->produk, $data);
       return TRUE;
    }
    public function GetRumah($id){
    	$refer=$this->db->select('*')
    					->from('rumahmakan')
    					->where('id',$id)
						->get();
		return $refer;

    }
    public function GetProduk($id){
    	
		$blog=$this->db->select('*')
						->from('produk')
						->where('id',$id)
						//->order_by('no','desc')
						->get();
		return $blog;
	}
	public function search($pencarian){
    	
		$blog=$this->db->select('*')
							->from('produk')
							->where('harga<=',$pencarian)
							->order_by('harga','asc')
							->get();
		return $blog;
	}
}

