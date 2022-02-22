<?php


    class DataProvider{

        public function connect(){
            try{
                return new PDO("mysql:host=localhost;dbname=customers", 'root', '') or null;
            }catch(PDOException $e){
                return null;
            }
        }

    }

?>