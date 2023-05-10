<?php


//Set API endpoint URL and parameters for registering a new user
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://52.59.33.40/web/api/register',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'firstname: Frith',
    'surname: Datche',
    'Authorization: Bearer 2XNVmuH2YVhYvVGgh4YkV9m6ph4c8CxMMX6UzeeDh7LJTmgdLk4Fz38QLwFt3sSY6BHkCeK8B3Jhgt23Q4dX6A3pmFRMGnJejwDg'
  ),
));

// Execute request and get response
$response = curl_exec($curl);
curl_close($curl);

// Decode JSON response into associative array
$data = (json_decode($response, true));
//var_dump($data);

// Check for any errors or status codes
if (isset($data['error'])) {
    echo 'Error: ' . $data['error'];
} else {
    echo '<h2 style="font-size:1rem;"> Message: ' . $data['result'].'</h2>';
}

