<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends MY_Controller{
		public function index(){
			//echo '查看栏目';

			$this->load->library('pagination');
			$perPage = 6;

			$config['base_url'] = site_url('admin/article/index');
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

			$this->load->model('article_model');
			$data['text']=$this->article_model->look();
			$this->load->view('admin/look',$data);
		}
		public function index0(){
			//echo '查看栏目';
			//$fenlei=$this->uri->segment(3);
			$this->load->library('pagination');
			$perPage = 6;

			$config['base_url'] = site_url('admin/article/index0');
			//$res=$this->db->query("select * from text where fenlei='$fenlei'");
			//$res=$res->result();
			//$total_rows = count($res);
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
			//$this->db->where()
			$this->db->limit($perPage,$offset);
			$this->db->order_by('type','desc');

			$this->load->model('article_model');
			$data['text']=$this->article_model->look0();
			$this->load->view('admin/look0',$data);
		}
		public function index1(){
			//文件上传
			// var_dump($_FILES);
			// $fileinfo=$_FILES["file"];
			// move_uploaded_file($fileinfo['tmp_name'],"./uploads/111.xls");die();
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'xls|jpg|png|jpeg|txt|doc|css|zip';
			$config['max_size'] = '10000';
			$config['max_width'] = '1024';
			$config['max_height'] = '1024';
			$config['file_name'] = time() . mt_rand(1000,9999);//随机的名字


			//载入上传类
			$this->load->library('upload',$config);

			//执行上传
			$vic=$this->upload->do_upload('file');
			if($vic)
			{

				$info = $this->upload->data();
				// echo "<pre>";
				// print_r($info);
				// echo "</pre>";die;			
				$info = $this->upload->data('file_name');
				//$info1 = $this->upload->data('file_path');
				//$this->upload->file_name = iconv("gbk","UTF-8",$info);
				$data=array(
							'name'=>$_POST['name'], 
							'time'=>$_POST['time'], 
							'title'=>$info
						   );
				$this->load->model('article_model');
				$this->article_model->charu($data);

				$url=site_url().'/admin/science/look/';
				echo "<script language=javascript>alert('上传成功!');location.href ='$url'</script>";
			}
			else
			{
			$wrong = $this->upload->display_errors();
				if($wrong)
				{
					echo "$wrong";
				}
			}
			//返回信息
			$this->load->view('admin/look1');
		}
		public function add_cate(){
			$data['top']=$this->uri->segment(4);
			$this->load->helper('form');
			$this->load->view('admin/article',$data);
		}
		public function add_cate0(){
			$data['top']=$this->uri->segment(4);
			$this->load->helper('form');
			$this->load->view('admin/article0',$data);
		}
		public function send(){
			//添加文章
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title','文章标题','required|min_length[5]');
			$this->form_validation->set_rules('type','类型','required|integer');
			$this->form_validation->set_rules('content','内容','required|max_length[1000]');
			$this->form_validation->set_rules('time','时间','required');

			$status = $this->form_validation->run();
			if($status){
				//echo '数据库操作';
				$data=array(
					'content'=>$_POST['content'],
					'writer'=>$_POST['writer'],
					'title'=>$_POST['title'],
					'time'=>$_POST['time'],
					'top'=>$_POST['top']
					);
				$this->load->model('article_model');
				$this->article_model->add($data);
				$url=site_url().'/admin/article/index/'.$data['top'];
				echo "<script language=javascript>alert('添加成功!');location.href ='$url'</script>";
			}
			else{
				$this->load->helper('form');
				$this->load->view('admin/article');
			}
		}
				//把要修改的数据提取出来
		public function update_cate(){
				$number=$this->uri->segment(4);
				// echo $number;die;
				$this->load->model('article_model','cate');
				$data['text'] = $this->cate->inquire($number);

				$this->load->helper('form');
				$this->load->view('admin/update',$data);
		}
				//修改数据
		public function update(){
				$this->load->library('form_validation');
				$this->form_validation->set_rules('title','文章标题','required|min_length[1]');
				$this->form_validation->set_rules('top','类型','required|integer');
				$this->form_validation->set_rules('content','内容','required|max_length[1000]');
				$this->form_validation->set_rules('time','时间','required');

				$status = $this->form_validation->run();
				
				if($status){	
				$this->load->model('article_model');
				
				$number=$this->input->post('number');
				$title=$this->input->post('title');
				$content=$this->input->post('content');
				$time=$this->input->post('time');
				$writer=$this->input->post('writer');
				$data=array(
					'title'=>$title,
					'content'=>$content,
					'time'=>$time,
					'writer'=>$writer
					);
				$data['text'] = $this->article_model->update($number,$data);
				$url=site_url().'/admin/article/index/';
				echo "<script language=javascript>alert('修改成功!');location.href ='$url'</script>";
				}else{
					$this->load->helper('form');
					$this->load->view('admin/update');
				}
				}

		//删除数据
		public function delete(){
				$number=$this->uri->segment(4);
				$this->load->model('article_model');
				$this->article_model->delete($number);
				$url=site_url().'/admin/article/index/';
				echo "<script language=javascript>alert('删除成功!');location.href ='$url'</script>";
		}

		//置顶
		public function top(){
				$number=$this->uri->segment(4);
				$this->load->model('article_model');
					$data=array(
					'type'=>1
					);
				$this->article_model->top($number,$data);
				redirect('admin/article/index');
		}

		//取消置顶
		public function untop(){
		$number=$this->uri->segment(4);
		$this->load->model('article_model');
					$data=array(
					'type'=>0
					);
		$this->article_model->untop($number,$data);
		redirect('admin/article/index');
		}
}
?>