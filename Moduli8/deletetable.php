<?php

    $host = "localhost";
    $db = "testnita";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        
        $sql = "DROP TABLE products";


        $conn->exec($sql);

        echo("Table Droped");
        
    }catch(Exeption $e){

        echo("Table NOT Droped");

    }
?>