<?php
    
    class Client{

        public function setClient($name, $email, $mobile){

            $db = new PDO("mysql:host=localhost;dbname=customers", 'root', '');
            if($db == null){
                return;
            }

            $sql = "INSERT INTO clients (name, email, mobile) VALUES (:name, :email, :mobile)";
            $smt = $db->prepare($sql);

            $smt->execute(
                [
                    ":name"=> $name,
                    ":email"=> $email,
                    ":mobile"=> $mobile
                ]
            );

            $smt = null;
            $db = null;
        }
        public function updateClient($id, $name, $email, $mobile){

            $db = new PDO("mysql:host=localhost;dbname=customers", 'root', '');
            if($db == null){
                return;
            }

            $sql = "UPDATE clients SET name = :name, email = :email, mobile = :mobile where id = :id";
            $smt = $db->prepare($sql);

            $smt->execute(
                [
                    ":id"=> $id,
                    ":name"=> $name,
                    ":email"=> $email,
                    ":mobile"=> $mobile
                ]
            );

            $smt = null;
            $db = null;
        }
        public function deleteCleientById($id){

            $db = new PDO("mysql:host=localhost;dbname=customers", 'root', '');
            if($db == null){
                return;
            }

            $query = "DELETE FROM clients WHERE id = :id;";
            $smt = $db->prepare($query);
            $smt->execute([
                ':id'=>$id
            ]);

            $smt = null;
            $db = null;
        }

        public function getClients(){

            $db = new PDO("mysql:host=localhost;dbname=customers", 'root', '');
            if($db == null){
                return;
            }

            $query = $db->query('SELECT * FROM clients');
            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            return $data;
        }
        public function getClientById($id){

            $db = new PDO("mysql:host=localhost;dbname=customers", 'root', '');
            if($db == null){
                return;
            }

            $query = $db->query("SELECT * FROM clients where id = '$id'");
            $data = $query->fetch(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            return $data;
        }

    }
?>