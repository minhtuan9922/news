<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['admin_id']))
		{
			redirect(base_url('admin/login'));
		}
	}
	public function index()
	{
		$data['title'] = 'Trang tổng quan';
		$data['content'] = 'admin/home/trangchu';
		$this->load->view('admin/index', $data);
	}
}
