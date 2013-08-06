<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 	$this->load->helper(array('form', 'url'));
		 	$this->load->model('Images_model');
	}
	
	public function index()
	{
		$this->load->view('upload-form');
		
	}
	
	private function upload()
	{
		$this->Images_model->uploads()
	}
	

}
