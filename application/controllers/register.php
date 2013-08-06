<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 
		$this->load->model("Register_model");
		$this->load->library('email', 'url');
	}
	
	public function index()
	{
		$this->load->view('register-form');
		
	}
	
	public function confirm_register()
	{
		$this->Register_model->register_form();
	}
}
