<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Danhmuc extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['admin_id']))
		{
			redirect(base_url('admin/login'));
		}
	}
	public function index()
	{
		$data['title'] = 'Danh mục bài viết';
		$data['content'] = 'admin/danhmuc/danhmuc';
		$this->load->view('admin/index', $data);
	}
}
