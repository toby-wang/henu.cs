<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Science extends MY_Controller{
		public function look(){
			$this->load->model('science_model');
			$data['text']=$this->science_model->look();
			$this->load->view('admin/science',$data);
		}

		//删除数据
		public function delete(){
			$number=$this->uri->segment(4);
			$this->load->model('science_model');
			$this->science_model->delete($number);
			
			$url=site_url().'/admin/science/look/';
			echo "<script language=javascript>alert('删除成功!');location.href ='$url'</script>";
		}




}
?>