<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {
	
	public function CekUser($username="",$password="")
	{
		$query= $this->db->get_where('user',array('username' =>$username ,'password'=>$password));
		$query=$query->result_array();
		return $query;
	}
}
