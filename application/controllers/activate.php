<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activate extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 	$this->load->model('Activate_model');
		
	}
	
	public function index()
	{
		$this->Activate_model->check_activate();
		
	}
	

}
