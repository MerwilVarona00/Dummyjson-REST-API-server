<?php
require "../vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$response = $client->get('products/');
$code = $response->getStatusCode();
$body = $response->getBody();
$decoded_response = json_decode($body);
$products = $decoded_response->products;
#echo '<pre>';
#var_dump($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Products</title>
</head>
<body>
    <div class="container" style="margin-top:20px">
    <h1 style="text-align:center;font-weight:bold;font-size:52px">PRODUCTS</h1>
    <?php foreach($products as $product){ ?>
        <div class="card col-8" style="margin: 0 auto; float: none; margin-bottom: 10px;">
                <img class="card-img-top" src="<?= $product->thumbnail ?>" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="font-size:45px"><?= $product->title ?></h5>
                <p class="card-text"><?= $product->description ?></p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: <?= $product->price ?></li>
                <li class="list-group-item">Brand: <?= $product->brand ?></li>
                <li class="list-group-item">Category: <?= $product->category ?></li>
                </ul>
                <div class="card-body">
                <li class="list-group-item"> <i> Product ID: <b> <?= $product->id ?> </b> </i> </li>
                </div>
        </div>
    <?php }?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>