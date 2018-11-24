<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		
	}
	public function index()
	{
		$data['title'] = 'Chức năng';
		
		$data['content'] = 'travel';
		$this->load->view('index', $data);
	}
}
