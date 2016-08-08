<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Science_model extends CI_Model{
	public function look(){
		$data = $this->db->get('article')->result_array();
		return $data;
	}
	public function delete($title){
		$data = $this->db->delete('article',array('title'=>$title));
	}
}
?>
