<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activate_model extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function check_activate(){
	
		$apikey = "489da61e9722e85a16669e5ffc54ba6bfb7a424c";

		 // $cookie = isset($_COOKIE['ci_session']) ? "ci_session=".$_COOKIE['ci_session'] : ''; // for login only
		
		  $server = "http://soidav.gopagoda.com/";
		
		 // $endpoint = "{$server}api/member/register.json";
		  $endpoint = "{$server}api/member/activate.json";
		  //$endpoint = "{$server}api/gallery/image.json";
		   $id = base64_decode($this->input->get('activate'));
		   $activation = $this->input->get('user');
    		
		  $fields = array (
		
		    // register
		   /*
 'name'     => $this->input->post('username'),
		    'email'    => $this->input->post('email'),
		    'password' => $this->input->post('password'),
*/
		
		    // activate
			'id' => $id,
		    'code' => $activation
		
		
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
		  //  CURLOPT_COOKIE          => $cookie // for login remark it
		  );
		  curl_setopt_array($ch, $config);
		
		  $result = curl_exec($ch);
		  $info = curl_getinfo($ch);
		  
		  curl_close($ch);
		
		  var_dump($info['http_code']); // result code
		  var_dump(json_decode($result, true)); // result
		  
	}
}