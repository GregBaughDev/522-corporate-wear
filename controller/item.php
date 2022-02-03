<?php
    session_start();
    
    require('../model/item.php');
    require('./class/item.php');

    $item = new Item(
        $_POST['colour'],
        $_GET['name'],
        $_GET['cat'],
        $_POST['size'],
        $_POST['quantity'],
        $_GET['item'],
        $_POST['gender']
    );

    array_push($_SESSION['orders'][0]['items'], $item);
    header("location: ../view/catalogue.php?item=add");
?>