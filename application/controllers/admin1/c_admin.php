<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_blog');
    if ($this->session->userdata('logged_in')!=1) {
      
      redirect('login');
      }
          
	}
	public function index() {
    $data = array(
                  'judul' => $this->session->userdata('username'));
    $data['blog'] = $this->m_blog->GetBlog();
    $this->template->load('admin/static','admin/home', $data);
    
	}

  public function addpage() {
    $this->template->load('admin/static','admin/addpage');
  }

	public function addhome(){

			$this->load->library('upload');
        $nmfile = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './assets/uploads/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

		    $this->upload->initialize($config);
        
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'nama' => $this->input->post('nama'),
                  'alamat' => $this->input->post('alamat'),
                  'telp' => $this->input->post('telp'),
                  'gambar' =>$gbr['file_name']
                );
             
                $this->m_blog->addpage($data);
                echo "<script>alert('Berhasil Disimpan');</script>";
                redirect ('admin1/c_admin');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                echo "<script>alert('GAGAL Menyimpan');</script>";
                redirect ('admin1/c_admin/addpage');//jika gagal maka akan ditampilkan form upload
            }
        }
  }


  public function seeproduk() {
    $id = $this->uri->segment(4);
    $data['refer']= $this->m_blog->GetRumah($id);
    $data['blog'] = $this->m_blog->GetProduk($id);
    $this->template->load('admin/static','admin/vproduk',$data);
  }

  public function loadAddProduk()  {
    $this->template->load('admin/static','admin/addproduk');
  }

  public function addproduk() {

      $this->load->library('upload');
        $nmfile = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './assets/produk/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        $id=$this->input->post('id');
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'id' => $id,
                  'namaproduk' => $this->input->post('nama'),
                  'deskripsi' => $this->input->post('deskripsi'),
                  'harga' => $this->input->post('harga'),
                  'gambarp' =>$gbr['file_name']
                );
             
                $this->m_blog->addproduk($data);
                echo "<script>alert('Berhasil Disimpan');</script>";
                redirect ('admin1/c_admin');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                echo "<script>alert('GAGAL Menyimpan');</script>";
                redirect ('admin1/c_admin/loadAddProduk');//jika gagal maka akan ditampilkan form upload
            }
        }
      }


		
}
?>