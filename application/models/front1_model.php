<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front1_model extends CI_Model{
		
		public function look($top)
		{
		$data = $this->db->limit(6)->where(array('top'=>$top))->get('text')->result_array();
		return $data;
		}
		public function look1()
		{
		$data = $this->db->limit(10)->where(array('top'=>0))->get('text')->result_array();
		return $data;
		}
		public function look2()
		{
		$data = $this->db->limit(10)->where(array('top'=>1))->get('text')->result_array();
		return $data;
		}
		public function look3(){
		$data = $this->db->get('article')->result_array();
		return $data;			
		}
}
?>