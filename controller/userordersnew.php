<?php
    session_start();
    require("./class/order.php");

    $order = new Order($_SESSION['user'][0]['company'], $_POST['dept']);
    array_push($_SESSION['orders'], $order);
    header('location: ../view/user/userorders.php');

?>