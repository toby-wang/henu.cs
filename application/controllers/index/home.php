<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
	
	 public function login()
	 {
	 	$this->load->view('admin/login');
	 }

	//手动建立验证码的方法
	public function code(){
		$config = array(
			'width' => 65,
			'height'=>25,
			'fontSize'=>17
			);
		$this->load->library('code',$config);
		$this->code->show();
	}
	public function news()
	{
		$this->load->library('pagination');
		$perPage = 10;

		$config['base_url'] = site_url('index/home/news');
		$config['total_rows'] = $this->db->where(array('top'=>0))->count_all_results('text');
		$config['per_page'] = $perPage;
		$config['uri_segment'] = 4;
		$config['first_link']='首页';
		$config['prev_link']='上一页';
		$config['next_link']='下一页';
		$config['last_link']='尾页';		

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$offset = $this->uri->segment(4);
		$this->db->limit($perPage,$offset);

		$this->db->order_by('type','desc');
		$this->load->model('front1_model');
		$data['text']=$this->front1_model->look1();
		$this->load->view('index/news',$data);
	}
	public function announce()
	{
		$this->load->library('pagination');
		$perPage = 10;

		$config['base_url'] = site_url('index/home/announce');
		$config['total_rows'] = $this->db->where(array('top'=>1))->count_all_results('text');
		$config['per_page'] = $perPage;
		$config['uri_segment'] = 4;
		$config['first_link']='首页';
		$config['prev_link']='上一页';
		$config['next_link']='下一页';
		$config['last_link']='尾页';		

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$offset = $this->uri->segment(4);
		$this->db->limit($perPage,$offset);

		$this->db->order_by('type','desc');
		$this->load->model('front1_model');
		$data['text']=$this->front1_model->look2();
		$this->load->view('index/announce',$data);
	}
	public function look1()
	{
		//浏览量
		@$num=file_get_contents('./num.txt');
		$num = $num?$num:0;
		$num++;
		$data=array('v_num' =>$num);
		$re=fopen('./num.txt','w');
		fwrite($re,$num);
		fclose($re);
		//新闻公告前台显示
		$this->db->order_by('type','desc');
		$this->load->model('front1_model');
		$data['text1']=$this->front1_model->look(1);
		
		$data['text']=$this->front1_model->look3();

		$this->db->order_by('type','desc');
		$data['text0']=$this->front1_model->look(0);
		$this->load->view('index/front1',$data);
	}
	public function science()
	{
		$this->load->model('front1_model');
		$data['text']=$this->front1_model->look3();
		$this->load->view('index/science',$data);
	    $this->load->view('index/science1');
	    $this->load->view('index/science_bottom');
	}
		public function science1()
	{
		$this->load->model('front1_model');
		$data['text']=$this->front1_model->look3();
		$this->load->view('index/science',$data);
	    $this->load->view('index/science2');
	    $this->load->view('index/science_bottom');
	}
		public function science2()
	{
		$this->load->model('front1_model');
		$data['text']=$this->front1_model->look3();
		$this->load->view('index/science',$data);
	    $this->load->view('index/science3');
	    $this->load->view('index/science_bottom');
	}
		public function science3()
	{
		$this->load->model('front1_model');
		$data['text']=$this->front1_model->look3();
		$this->load->view('index/science',$data);
	    $this->load->view('index/science4');
	    $this->load->view('index/science_bottom');
	}
			public function science4()
	{
		$this->load->model('front1_model');
		$data['text']=$this->front1_model->look3();
		$this->load->view('index/science',$data);
	    $this->load->view('index/science5');
	    $this->load->view('index/science_bottom');
	}
}

