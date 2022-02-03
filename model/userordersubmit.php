<?php
    include("../controller/class/item.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");
    session_start();

    try {
        $order = "INSERT INTO corporate_wear.orders (customerId, departmentId, payment) VALUES (:cxid, :depid, 'invoice')";
        $order = $conn->prepare($order);
        $order->bindParam(':cxid', $_SESSION['user'][0]['id']);
        //TO DO: Get department id?
        $order->bindParam(':depid', );
        $order->execute();
        $orderId = $conn->lastInsertId();
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }
?>