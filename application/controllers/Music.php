<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		
	}
	public function index()
	{
		$data['title'] = 'Âm nhạc';
		
		$data['content'] = 'music';
		$this->load->view('index', $data);
	}
}
