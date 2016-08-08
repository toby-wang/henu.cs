<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$user = $this->session->userdata('user');
		$number = $this->session->userdata('number');

		if(!$user||!$number){
			redirect('index/home/login');
		}

	}
}





?>