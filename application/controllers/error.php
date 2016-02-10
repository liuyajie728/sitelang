<?php
	if(!defined('BASEPATH')) exit('此文件不可被直接访问');

	class Error extends CI_Controller
	{	
		// 404
		public function index()
		{
			$data['class'] = 'error';
			$data['title'] = '404';
			
			$this->load->view('templates/header', $data);
			$this->load->view('404', $data);
			$this->load->view('templates/footer');
			$this->output->cache(60*24*30);//缓存一个月
		}
	}
	
/* End of file error.php */
/* Location: ./application/controllers/error.php */