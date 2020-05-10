<?php
    try{
    $db = new PDO('mysql:host=localhost;dbname=php-crud-db','root','');
    }catch(PDOException $pd){
        echo $pd->getMessage();
    }
?>