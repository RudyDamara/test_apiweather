<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    // api key 62a10c2d1f01d42075113d4121c27173
  CURLOPT_URL => "http://api.openweathermap.org/data/2.5/weather?q=sleman,indonesia&APPID={api key}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Host: api.openweathermap.org",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}