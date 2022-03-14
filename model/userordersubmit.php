<?php
    include_once("../controller/class/item.php");
    
    function submitOrder($conn, $orderArray, $dept) {
        try {
            $order = "INSERT INTO corporate_wear.orders (customerId, departmentId, payment) VALUES (:cxid, :depid, 'invoice')";
            $order = $conn->prepare($order);
            $order->bindParam(':cxid', $_SESSION['user'][0]['id']);
            $order->bindParam(':depid', $dept);
            $order->execute();
            $orderId = $conn->lastInsertId();

            foreach($orderArray as $orderItem) {
                $indItem = "INSERT INTO corporate_wear.order_items (catalogueId, orderId, customerId, qty, size, colour, gender)
                VALUES (:catId, :ordId, :cxId, :qty, :size, :colour, :gen)";
                $indItem = $conn->prepare($indItem);
                $itemId = $orderItem->getItem('id');
                $itemQty = intval($orderItem->getItem('quantity'));
                $itemSize = $orderItem->getItem('size');
                $itemColour = $orderItem->getItem('colour');
                $itemGender = $orderItem->getItem('gender');
                $indItem->bindParam(':catId', $itemId);
                $indItem->bindParam(':ordId', $orderId);
                $indItem->bindParam(':cxId', $_SESSION['user'][0]['id']);
                $indItem->bindParam(':qty', $itemQty);
                $indItem->bindParam(':size', $itemSize);
                $indItem->bindParam(':colour', $itemColour);
                $indItem->bindParam(':gen', $itemGender);
                $indItem->execute();
            }
            header("location: ../view/user/userviewdepartment.php?id=" . $dept . "&succ=true");
        } catch (PDOException $e) {
            error_log($e->getMessage(), 0);
            header("location: ../view/userviewdepartment.php?id=" . $dept . "&succ=false");
        }
    };
?>