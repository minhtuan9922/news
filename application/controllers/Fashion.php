<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fashion extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		
	}
	public function index()
	{
		$data['title'] = 'Thời trang';
		
		$data['content'] = 'fashion';
		$this->load->view('index', $data);
	}
}
