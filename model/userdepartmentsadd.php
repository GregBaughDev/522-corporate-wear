<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

    try {
        $departments = "INSERT INTO corporate_wear.department (customerId, name) VALUES
        (:customerId, :name)";
        $departments = $conn->prepare($departments);
        $departments->bindParam(':customerId', $_SESSION['user'][0]['id']);
        $departments->bindParam(':name', $_POST['dept']);
        $departments->execute();
        header("location: ../view/user/userdepartments.php");
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }

?>