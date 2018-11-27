<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['admin_id']))
		{
			redirect(base_url('admin/login'));
		}
		$this->load->helper('directory');
	}
	
	public function index()
	{
		$list_file = directory_map('images');
		$img = array();
		if($list_file)
		{
			foreach($list_file as $item)
			{
				$img[] = array(
					'url' => base_url('images/'.$item),
					'thumb' => base_url('images/'.$item),
					'tag' => 'image'
				);
			}
		}
		echo json_encode($img);
	}	
	
	public function delete_file()
	{
		if($this->input->post('src')) 
		{
			$link_file = str_replace('http://localhost/news', '.', $this->input->post('src'));
			unlink($link_file);
		}
	}
}
