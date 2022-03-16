<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

    function retrieveOrder ($conn, $orderId) {
        try {
            $order = "SELECT corporate_wear.order_items.catalogueId, corporate_wear.order_items.qty, corporate_wear.order_items.size, 
                corporate_wear.order_items.colour, corporate_wear.order_items.gender, corporate_wear.department.name, 
                corporate_wear.catalogue.name, corporate_wear.catalogue.category, corporate_wear.orders.departmentId
                FROM corporate_wear.orders
                INNER JOIN corporate_wear.department ON corporate_wear.department.id = corporate_wear.orders.departmentId
                INNER JOIN corporate_wear.order_items ON corporate_wear.order_items.orderId = corporate_wear.orders.id
                INNER JOIN corporate_wear.catalogue ON corporate_wear.catalogue.id = corporate_wear.order_items.catalogueId
                WHERE corporate_wear.orders.customerId = :cx AND corporate_wear.orders.id = :order";
            $order = $conn->prepare($order);
            $order->bindParam(":cx", $_SESSION['user'][0]['id']);
            $order->bindParam(":order", $orderId);
            $order->execute();
            $order = $order->fetchAll();
            return $order;
        } catch (PDOException $e) {
            error_log($e->getMessage(), 0);
        }
    }
?>