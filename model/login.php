<?php

include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

try {
    $user = "SELECT * FROM corporate_wear.customer WHERE email = :email AND password = :password";
    $user = $conn->prepare($user);
    $user->bindParam(':email', $_POST['user']);
    $user->bindParam(':password', $_POST['pass']);
    $user->execute();
    $user = $user->fetchAll();
    if(count($user) > 0){
        //redirect w success
        echo("SUCCESS");
    } else {
        //redirect w failure
        echo("FAILURE");
    }
} catch (PDOException $e) {
    error_log($e->getMessage(), 0);
}


?>