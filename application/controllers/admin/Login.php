<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		if(isset($_SESSION['admin_id']))
		{
			redirect(base_url('admin'));
		}
		
		$this->load->model('madmin');
		$data['title'] = 'Đăng nhập trang quản trị';
		if(isset($_POST['login']))
		{
			$this->form_validation->set_rules('username', 'username', 'required', array('required' => 'Vui lòng nhập %s'));
			$this->form_validation->set_rules('password', 'mật khẩu', 'required', array('required' => 'Vui lòng nhập %s'));

			if($this->form_validation->run() != FALSE)
			{
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
				$check = $this->madmin->dangnhap($username, $password);
				if(!empty($check))
				{
					$this->session->set_userdata("admin_id", $check['id']);
					redirect(base_url('admin'));
				}
				else
				{
					$data['error'] = 'Username hoặc Mật khẩu không đúng';
				}
			}
		}
		$this->load->view('admin/login', $data);
	}	
	
	public function dangxuat()
	{
		$this->session->unset_userdata("admin_id");
		redirect(base_url('admin/login'));
	}
}
