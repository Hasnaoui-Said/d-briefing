<?php

    require_once('client.php');

    $nowClients = new Client();
    $clients = $nowClients->getClients();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

</head>
<body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Clients</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                    aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="row my-4 mx-auto">
            <h3 class="col-md-6">listes des Client</h3>
            <div class="col-md-6">
                <a href="addClient.php"><i class="fa fa-plus"></i>Nouveau Client</a>
            </div>
        </div>

        <div class="conatiner mx-4">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Mobile</th>
                        <th class='text-center' colspan='2'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clients as $client) { ?>
                    <tr>
                        <td><?=$client['id'] ?></td>
                        <td><?=$client['name'] ?></td>
                        <td><?=$client['email'] ?></td>
                        <td><?=$client['mobile'] ?></td>
                        <td><a href="update.php?id=<?=$client['id'] ?>">Update</a></td>
                        <td><a href="traitement.php?type=delete&id=<?=$client['id'] ?>">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
</body>
</html>