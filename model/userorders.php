<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

    try {
        $userOrders = "SELECT * FROM corporate_wear.orders INNER JOIN corporate_wear.department ON
            corporate_wear.orders.departmentId = corporate_wear.department.id
            WHERE corporate_wear.orders.customerId = :id";
        $userOrders = $conn->prepare($userOrders);
        $userOrders->bindParam(":id", $_SESSION['user'][0]['id']);
        $userOrders->execute();
        $userOrders = $userOrders->fetchAll();
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }
?>