<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codes extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		
	}
	public function index()
	{
		$data['title'] = 'Codes';
		
		$data['content'] = 'codes';
		$this->load->view('index', $data);
	}
}
