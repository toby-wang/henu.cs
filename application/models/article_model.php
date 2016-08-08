<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model{
	//添加数据
	public function add($data){
		$this->db->insert('text',$data);
	}
	//查看数据
	public function look(){
		$data = $this->db->where(array('top'=>0))->get('text')->result_array();
		return $data;
	}
	public function look0(){
		$data = $this->db->where(array('top'=>1))->get('text')->result_array();
		return $data;
	}
	//将要修改的数据提取出来
	public function inquire($number){
		$data = $this->db->where(array('number'=>$number))->get('text')->result_array();
		$sql="select * from text where number = $number order by type desc";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	//更改提取出来的数据
	public function update($number,$data){
		$data = $this->db->update('text',$data,array('number'=>$number));
		return $data;
	}
	//删除数据
	public function delete($number){
		$data = $this->db->delete('text',array('number'=>$number));
	}

	public function top($number,$data){
		$this->db->update('text',$data,array('number'=>$number));
		$data = $this->db->select()->order_by('type','DESC');
		return $data;
	}
	public function untop($number,$data){
		$this->db->update('text',$data,array('number'=>$number));
		$data = $this->db->where(array('number'=>$number))->get('text')->result_array();
		return $data;
	}
	public function charu($data){
		$this->db->insert('article',$data);
	}

}
?>