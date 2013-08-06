<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function register_form(){
	
		if($this->input->post('submit')!=NULL){
		$apikey = "489da61e9722e85a16669e5ffc54ba6bfb7a424c";

		  //$cookie = isset($_COOKIE['ci_session']) ? "ci_session=".$_COOKIE['ci_session'] : ''; // for login only
		
		  $server = "http://soidav.gopagoda.com/";
		
		  $endpoint = "{$server}api/member/register.json";
		  //$endpoint = "{$server}api/member/activate.json";
		  //$endpoint = "{$server}api/gallery/image.json";
		
		  $fields = array (
		
		    // register
		    'name'     => $this->input->post('username'),
		    'email'    => $this->input->post('email'),
		    'password' => $this->input->post('password'),
		
		    // activate
		    /*
		'id' => 249,
		    'code' => "0b5b464aa00d102604ebdc32d0c689fab01984d8"
		*/
		
		    //upload image
		    //'image' => '@'.realpath('1avatar1.jpg')
		  );
		 
		  
		  $fields = http_build_query($fields); // for form submit only text
		  
		  $header = array(
		   // "Content-Type: multipart/form-data", // for file upload
		    "Content-Type: application/x-www-form-urlencoded", // for form submit
		    "X-API-KEY: ". $apikey,
		    "Accept: */*",
		    "Accept-Encoding: gzip,deflate,sdch",
		    "Accept-Language: en-US,en;q=0.8"
		  );
		
		  $ch = curl_init();
		  $config = array(
		    CURLOPT_URL             => $endpoint,
		    CURLOPT_HTTPHEADER      => $header,
		    CURLOPT_RETURNTRANSFER  => true,
		    CURLOPT_POST            => true,
		    CURLOPT_POSTFIELDS      => $fields,
		   // CURLOPT_COOKIE          => $cookie // for login remark it
		  );
		  curl_setopt_array($ch, $config);
		
		  $result = curl_exec($ch);
		  $info = curl_getinfo($ch);
		  
		  curl_close($ch);
		
		  $status_code = ($info['http_code']); // result code
		  
		  $data = json_decode($result, true);
		  //var_dump($info['http_code']); // result code
		  //var_dump(json_decode($result, true)); // result
		  
		 // echo $result;
		  if($status_code==200){
			  $activate_code = $data['result']['activation_code'];
			  $activate_id = base64_encode($data['result']['id']);
			  
				$this->email->from('register@soidav.com', 'Soidav');
				$this->email->to($this->input->post('email'));
				$this->email->bcc('regulators13@gmail.com');
				
				$this->email->subject('Activate Register Soidav');
				$detail = "Username: ".$this->input->post('username') ."\n" ."";
				$detail.= "Password: ".$this->input->post('password') ."\n\n"."";
				$detail.= "http://project.rgb7.com/soidav/activate?user=$activate_code&activate=$activate_id"."";
				$this->email->message("$detail");
				
				$this->email->send();
				
				redirect('login', 'refresh');
				exit();	
			}else{
				//print_r($data);
				echo "<script>alert('Register fail.');</script>";
				echo "<script>window.location.href = '" . base_url() . "register';</script>";
	  
		  }// check status code
		 	  	
		  
		   
			
		}// end submit
	}
}