<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baiviet extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['admin_id']))
		{
			redirect(base_url('admin/login'));
		}
	}
	public function index()
	{
		$data['title'] = 'Danh sách bài viết';
		$data['content'] = 'admin/baiviet/danhsach';
		$this->load->view('admin/index', $data);
	}
	public function them()
	{
		$data['title'] = 'Thêm bài viết mới';
		$data['content'] = 'admin/baiviet/them';
		$this->load->view('admin/index', $data);
	}
}
