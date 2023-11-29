<?php
require "../vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$user_id = $_GET['user_id'] ?? null;

$data = array(
    'firstName' => 'Potato',
    'maidenName' => 'N/A',
    'lastName' => 'Fries',
    'age' => '18',
    'gender' => 'female',
    'email' => 'fries.potato@gmail.com',
    'phone' => '01234567891',
    'bloodGroup' => 'A+',
    'image' => 'image2.png'
);

$options = [
      'method'  => 'PUT',
      'headers'=>  ['Content-Type' => 'application/json'],
      'body' => json_encode($data)]
;

$response = $client->put('users/' . $user_id, $options);
$code = $response->getStatusCode();
$body = $response->getBody();
$decoded_response = json_decode($body);
echo "<pre>";
var_dump($decoded_response);

?>