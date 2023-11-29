<?php
require "../vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$data = array(
    'firstName' => 'Merwil',
    'maidenName' => 'G.',
    'lastName' => 'Varona',
    'age' => '23',
    'gender' => 'male',
    'email' => 'varona.merwil@auf.edu.ph',
    'phone' => '09620615567',
    'bloodGroup' => 'AB',
    'image' => 'image.png'
);

$options = [
      'method'  => 'POST',
      'headers'=>  ['Content-Type' => 'application/json'],
      'body' => json_encode($data)]
;
$response = $client->post('users/add', $options);
$code = $response->getStatusCode();
$body = $response->getBody();
$decoded_response = json_decode($body);
echo "<pre>";
var_dump($decoded_response);

?>