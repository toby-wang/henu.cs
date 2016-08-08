<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
	
	public function check($user){
	$data = $this->db->get_where('login_name',array('user'=>$user))->result_array();
	return $data;
	}

}

?>