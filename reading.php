<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://52.59.33.40/web/api/code',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: _csrf=e89b6309877ad94202054664d586764ba450de9e8ddb94768b951d0eb45538dea%3A2%3A%7Bi%3A0%3Bs%3A5%3A%22_csrf%22%3Bi%3A1%3Bs%3A32%3A%226HTsUbsZ5ns0_VZEuN0PrfjaInw6Bj18%22%3B%7D'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;

$data = (json_decode($response, true));


foreach ($data as $var){
    echo $var .'</b>';
    //echo "Title:" .$var[name] .'</br>' ."Message:" .$var[message] .'</br>' ."Type:" .$var[type] .'</br>' ."Status:" .$var[status];
    }