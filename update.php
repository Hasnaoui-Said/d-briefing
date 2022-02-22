<?php

    require_once('client.php');

    $nowClient = new Client();
    $id = $_GET['id'] ?? "";
    $client = $nowClient->getClientById($id);
    // print_r($client);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

</head>
<body>
    <div class="row">
        <form action="traitement.php?type=update&id=<?=$client['id'] ?>" method="POST" class="g-3 my-4 col-md-6 mx-auto needs-validation card">
            <div class="form-group">
                <label for="validationCustom01" class="form-label">Name</label>
                <input name='name' type="text" class="form-control" id="validationCustom01" value="<?=$client['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="validationCustom01" class="form-label">Email</label>
                <input name='email' type="text" class="form-control" id="validationCustom01" value="<?=$client['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="validationCustom01" class="form-label">Mobile</label>
                <input name='mobile' type="text" class="form-control" id="validationCustom01" value="<?=$client['mobile'] ?>" required>
            </div>
            <div class="d-grid my-4 gap-2">
                <input type="submit" value='Update Client'>
            </div>
        </form>
    </div>
</body>
</html>