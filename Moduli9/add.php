<?php

    include_once('config.php');

    if(isset($_POST['submit'])){

        $username = $_POST['username'];

        $email = $_POST['email'];

        $paswword = $_POST['paswword'];

        $sql = "INSERT INTO users(username,email,paswword) VALUES (:username, :email, :paswword)";

        $sqlQuery = $connect->prepare($sql);

        $sqlQuery->bindParam(':username', $username);

        $sqlQuery->bindParam(':email', $email);

        $sqlQuery->bindParam(':paswword', $paswword);

        

        if($sqlQuery->execute()){
            echo "The user was added successfully!";
    }else{
        echo "The user was not added!";
    }

}

?>