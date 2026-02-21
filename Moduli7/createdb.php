<?php

    $host = "localhost";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host", $user, $pass);

        $sql = "CREATE DATABASE testNita";

        $conn->exec($sql);

        echo("Database created");
        
    }catch(Exeption $e){

        echo("Database not created");

    }
?>