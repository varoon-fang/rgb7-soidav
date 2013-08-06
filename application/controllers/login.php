<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct(){
		 parent::__construct();
		$this->load->model("Login_model");

	}

	public function index()
	{

		$this->load->view('login-form');

	}
	private function cookie_parse($header)
		  {
		    $cookies = array();
		    $header = explode("\n", $header);
		    foreach( $header as $line ) {
		      if( preg_match( '/^Set-Cookie: /i', $line ) ) {
		        $line = preg_replace( '/^Set-Cookie: /i', '', trim( $line ) );
		        $csplit = explode( ';', $line );
		        $cdata = array();
		        foreach( $csplit as $data ) {
		          $cinfo = explode( '=', $data );
		          $cinfo[0] = trim( $cinfo[0] );
		          if( $cinfo[0] == 'expires' ) $cinfo[1] = strtotime( $cinfo[1] );
		          if( $cinfo[0] == 'secure' ) $cinfo[1] = "true";
		          if( in_array( $cinfo[0], array( 'domain', 'expires', 'path', 'secure', 'comment' ) ) ) {
		            $cdata[trim( $cinfo[0] )] = $cinfo[1];
		          } else {
		            $cdata['value']['key'] = $cinfo[0];
		            $cdata['value']['value'] = $cinfo[1];
		          }
		        }
		        $cookies[] = $cdata;
		      }
		    }
		    return $cookies;
		  }



	public function check_login()
	{
		//$this->cookie_parse($header);

		  $apikey = "489da61e9722e85a16669e5ffc54ba6bfb7a424c";

		  $server = "http://soidav.gopagoda.com/";
		  //$server = "http://localhost/dating/";

		  $endpoint = "{$server}api/member/login.json";

		  $fields = array (
		    'name'     => $this->input->post('username'), //"fang@mail.com
		    'password' => $this->input->post('password'), //"12345",
		  );

		  $fields = http_build_query($fields);

		  $header = array(
		    "Content-Type: application/x-www-form-urlencoded",
		    "X-API-KEY: ". $apikey,
		    "Accept: */*",
		    "Accept-Encoding: gzip,deflate,sdch",
		    "Accept-Language: en-US,en;q=0.8"
		  );

		  $ch = curl_init();
		  $config = array(
		    CURLOPT_URL             => $endpoint,
		    CURLOPT_HTTPHEADER      => $header,
		    CURLOPT_HEADER          => true,
		    CURLOPT_RETURNTRANSFER  => true,
		    CURLOPT_POST            => true,
		    CURLOPT_POSTFIELDS      => $fields,
		  );
		  curl_setopt_array($ch, $config);

		  $result = curl_exec($ch);
		  $info = curl_getinfo($ch);
		  curl_close($ch);

		  list($headers, $content) = explode("\r\n\r\n",$result,2);

		  // Set Cookie
		  $cookie = $this->cookie_parse($headers);

		  $name = $cookie[0]['value']['key'];
		  $value = $cookie[0]['value']['value'];
		  $expires = $cookie[0]['expires'];

		  //setcookie($name, $value, $expires);

		  $cookie = array (
				'name'   => $name,
				'value'  => $value,
				'expire' => $expires
		  );

		  $this->input->set_cookie($cookie);

		  /*
var_dump($info['http_code']); // result code
		  var_dump(json_decode($content, true)); // result
*/
		  $status_code = $info['http_code'];
		  if($status_code==200){
			    echo "<script>alert('Login Success.');</script>";
				echo "<script>window.location.href = '" . base_url() . "profile';</script>";
			}else{
				//print_r($data);
				echo "<script>alert('Login fail.');</script>";
				echo "<script>window.location.href = '" . base_url() . "login';</script>";

		  }// check status code

		//$this->Login_model->validateLogin();
	}
}

