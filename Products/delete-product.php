<?php
require "../vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$product_id = $_GET['product_id'] ?? null;

$options = [
      'method'  => 'DELETE']
;

$response = $client->delete('products/' . $product_id, $options);
$code = $response->getStatusCode();
$body = $response->getBody();
$decoded_response = json_decode($body);
echo "<pre>";
var_dump($decoded_response);

?>