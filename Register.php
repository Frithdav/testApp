
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://52.59.33.40/web/api/register?Authorization=2XNVmuH2YVhYvVGgh4YkV9m6ph4c8CxMMX6UzeeDh7LJTmgdLk4Fz38QLwFt3sSY6BHkCeK8B3Jhgt23Q4dX6A3pmFRMGnJejwDg&firstname=Datche&surname=Frith',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('firstname' => 'Datche','surname' => 'Frith'),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: _csrf=7f1d36430005c10de31a87e7df461884807d95dba44b4bcd3cf0ff3617771e91a%3A2%3A%7Bi%3A0%3Bs%3A5%3A%22_csrf%22%3Bi%3A1%3Bs%3A32%3A%22Z9JhGW6c2IRiAh6dl3rwj_Jumhiv7Dnr%22%3B%7D'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;

// Decode JSON response into associative array
$data = (json_decode($response, true));
//var_dump($data);

// Check for any errors or status codes
if (isset($data['error'])) {
    echo 'Error: ' . $data['error'];
} else {
    echo '<h2 style="font-size:1rem;"> Message: ' . $data['assignedcode'].'</h2>';
}