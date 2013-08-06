<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 	$this->load->model('Profile_model');
	}
	
	public function index()
	{
		
		$this->load->view('profile-form');
		$this->Profile_model->list_profile();
	}
	

}
