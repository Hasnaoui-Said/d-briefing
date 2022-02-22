<?php

    require_once('client.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET'){

        if($_GET['type'] == 'update'){
            if(isset($_GET['id'])){
                require_once('client.php');

                $nowClient = new Client();
                $id = $_GET['id'] ?? "";
                $name = $_POST['name'] ?? "";
                $email = $_POST['email'] ?? "";
                $mobile = $_POST['mobile'] ?? "";
                $nowClient->updateClient($id, $name, $email, $mobile);
                // $client = $nowClient->getClientById($id);
                // print_r($client);
                // var_dump($client);
                header('location: ./');
            
            }
        }
        if($_GET['type'] == 'delete'){
            if(isset($_GET['id'])){
                $nowClient = new Client();
                $id = $_GET['id'] ?? "";
                $client = $nowClient->deleteCleientById($id);
                print_r($client);
                header('location: ./');
            
            }
        }
        if($_GET['type'] == 'add'){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile'])){
                $nowClient = new Client();
                $email = $_POST['email'] ?? "";
                $name = $_POST['name'] ?? "";
                $mobile = $_POST['mobile'] ?? "";
                $nowClient->setClient($name, $email, $mobile);
                // print_r($client);
                header('location: ./');
            
            }
        }
    }
?>