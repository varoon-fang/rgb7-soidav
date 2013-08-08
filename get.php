<?php

  $apikey = "489da61e9722e85a16669e5ffc54ba6bfb7a424c";

  //$cookie = isset($_COOKIE['ci_session']) ? "ci_session=".$_COOKIE['ci_session'] : '';

  $server = "http://soidav.gopagoda.com/";
  //$server = "http://localhost/dating/";

  //$endpoint = "{$server}api/member/data.json";
  //$endpoint = "{$server}api/member/profile.json?lang=th";
  //$endpoint = "{$server}api/gallery/image.json";
  //$endpoint = "{$server}api/gallery/like.json?id=193";
 // $endpoint = "{$server}api/geodata/location";
   $endpoint = "{$server}api/geodata/country.json";

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
   // CURLOPT_COOKIE          => $cookie
  );
  curl_setopt_array($ch, $config);

  $result = curl_exec($ch);
  $info = curl_getinfo($ch);
  curl_close($ch);

  var_dump($info['http_code']); // result code
  var_dump(json_decode($result, true)); // result

?>
