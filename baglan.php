<?php
$host ='localhost';
$dbName ='php-crud-db';
$username ='root';
$password ='';

    try{
    $db = new PDO("mysql:host=$host;dbname=$dbName","$username","$password");
    }catch(PDOException $pd){
        echo $pd->getMessage();
    }
