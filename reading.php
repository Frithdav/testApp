<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://52.59.33.40/web/api/code?Authorization=2XNVmuH2YVhYvVGgh4YkV9m6ph4c8CxMMX6UzeeDh7LJTmgdLk4Fz38QLwFt3sSY6BHkCeK8B3Jhgt23Q4dX6A3pmFRMGnJejwDg&code=645bc8d545a6d',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'code: no data received',
    'Cookie: _csrf=7f1d36430005c10de31a87e7df461884807d95dba44b4bcd3cf0ff3617771e91a%3A2%3A%7Bi%3A0%3Bs%3A5%3A%22_csrf%22%3Bi%3A1%3Bs%3A32%3A%22Z9JhGW6c2IRiAh6dl3rwj_Jumhiv7Dnr%22%3B%7D'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;


$data = (json_decode($response, true));

// Check for any errors or status codes and display message if successful
if (isset($data['error'])) {
    echo 'Error: ' . $data['error'];
} else {
    echo '<h2 style="font-size:1rem;text-align:center;margin-top:40px;"> User registered successfully with Message: '.'<br> <span style="color:#000080;">'. $data['message'] .'</h2>';
}    