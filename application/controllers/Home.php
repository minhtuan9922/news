<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		
	}
	public function index()
	{
		$data['title'] = 'Trang chủ';
		$data['slide'] = 'home/slide';
		
		$data['content'] = 'home/home';
		$this->load->view('index', $data);
	}
}
