<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		
	}
	public function index()
	{
		$data['title'] = 'Liên hệ';
		
		$data['content'] = 'contact';
		$this->load->view('index', $data);
	}
}
