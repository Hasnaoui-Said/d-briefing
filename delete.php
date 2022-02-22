<?php

    require_once('client.php');

    $nowClient = new Client();
    $id = $_GET['id'] ?? "";
    $client = $nowClient->getClientById($id);
    print_r($client);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
</body>
</html>