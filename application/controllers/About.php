<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		
	}
	public function index()
	{
		$data['title'] = 'Về chúng tôi';
		
		$data['content'] = 'about';
		$this->load->view('index', $data);
	}
}
