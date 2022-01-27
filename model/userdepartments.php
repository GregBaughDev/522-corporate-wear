<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

    try {
        $departments = "SELECT * FROM corporate_wear.department WHERE customerId = :id";
        $departments = $conn->prepare($departments);
        $departments->bindParam(':id', $_SESSION['user'][0]['id']);
        $departments->execute();
        $departments = $departments->fetchAll();
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }

?>