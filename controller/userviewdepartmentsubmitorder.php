<?php
    require_once('./class/item.php');
    session_start();
    require('../model/userordersubmit.php');
    require('../model/conn/conn.php');

    submitOrder($conn, $_SESSION['order'][$_GET['dept']]['products'], $_GET['dept']);
?>