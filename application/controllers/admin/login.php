<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
	public function login_in(){
		$code = $this->input->post('captcha');
		if(!isset($_SESSION)){
			session_start();
		}
		
		if(strtoupper($code)!==$_SESSION['code'])
		{
			$url=site_url().'/index/home/login/';
			echo "<script language=javascript>alert('验证码错误!');location.href ='$url'</script>";
			die("验证码错误");
		}else{
		$user = $this->input->post('user');
		$this->load->model('admin_model');
		$userData=$this->admin_model->check($user);
		
		$password=$this->input->post('password');
			if(!$userData || $userData[0]['password']!=$password){
				$url=site_url().'/admin/login/index/';
				echo "<script language=javascript>alert('用户名或者密码错误!');location.href ='$url'</script>";
			}else{
				$url=site_url().'/admin/admin/index/';
				echo "<script language=javascript>location.href ='$url'</script>";
				
				$sessionData = array(
					'user'=>$user,
					'number'=>$userData[0]['number']
					);
				$this->session->set_userdata($sessionData);
				}
			}
		}
		public function login_out(){
			$this->session->sess_destroy();
			$url=site_url().'/index/home/login/';
			echo "<script language=javascript>location.href ='$url'</script>";
		}
}

?>