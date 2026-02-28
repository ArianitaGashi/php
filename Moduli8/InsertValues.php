<?php

    $host = "localhost";
    $db = "testnita";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        
        $username = "Arianita";

        $password = "nita1234";


        $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";


        $conn->exec($sql);

        echo("ROW ADDED");
        
    }catch(Exeption $e){

        echo("ROW NOT ADDED");

    }
?>