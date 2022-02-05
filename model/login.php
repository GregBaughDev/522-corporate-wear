<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

    try {
        $user = "SELECT * FROM corporate_wear.customer WHERE email = :email AND password = :password";
        $user = $conn->prepare($user);
        $user->bindParam(':email', $_POST['user']);
        $user->bindParam(':password', $_POST['pass']);
        $user->execute();
        $user = $user->fetchAll();
        if(count($user) > 0){
            $_SESSION['authenticate'] = true;
            $_SESSION['user'] = $user;
            header("Location: ../view/user/userhome.php");
            $_SESSION['orders'] = array();
        } else {
            header("Location: ../view/login.php");
        }
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }

?>