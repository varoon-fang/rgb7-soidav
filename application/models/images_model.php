<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {
	
	function uploads(){
	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = true;
		$config['max_size']	= '100000';
		$config['max_width']  = '600';
		$config['max_height']  = '600';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload-form', $error);
		}
		else
		{
			
			
		  $apikey = "489da61e9722e85a16669e5ffc54ba6bfb7a424c";

		  $cookie = isset($_COOKIE['ci_session']) ? "ci_session=".$_COOKIE['ci_session'] : '';
		
		  $server = "http://soidav.gopagoda.com/";
		  //$server = "http://localhost/dating/";
		
		  //$endpoint = "{$server}api/member/data.json";
		  //$endpoint = "{$server}api/member/profile.json?lang=en";
		  $endpoint = "{$server}api/gallery/image.json";
		  //$endpoint = "{$server}api/gallery/like.json?id=193";
		
		
		  $header = array(
		    "Content-Type: text/xml;charset=UTF-8",
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
		    CURLOPT_COOKIE          => $cookie
		  );
		  curl_setopt_array($ch, $config);
		
		  $result = curl_exec($ch);
		  $info = curl_getinfo($ch);
		  curl_close($ch);
		
		  var_dump($info['http_code']); // result code
		  var_dump(json_decode($result, true)); // result	
		  
		  $data = array('upload_data' => $this->upload->data());

			$this->load->view('upload-form', $data);
		}// end if upload sucess
	}
}