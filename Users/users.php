<?php
require "../vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$response = $client->get('users/');
$code = $response->getStatusCode();
$body = $response->getBody();
$decoded_response = json_decode($body);
$users = $decoded_response->users;

?>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Users</title>
</head>
<body>  
    <div class = "container" style="margin-top: 20px;"> 
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Complete Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Blood Type</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user){ ?>
                    <tr>
                        <th scope="row"><?php echo $user->id?></th>
                        <td><?php echo $user->firstName?><?php echo " "?><?php echo $user->maidenName?><?php echo " "?><?php echo $user->lastName?></td>
                        <td><?php echo $user->age ?></td>
                        <td><?php echo $user->gender?></td>
                        <td><?php echo $user->email?></td>
                        <td><?php echo $user->phone?></td>
                        <td><?php echo $user->bloodGroup?></td>
                        <td><img src="<?php echo $user->image?>" width="100" length="100"></td>
                    </tr>
                    <?php }?>
                </tbody>
        </table>
    </div>
</body>
</html>