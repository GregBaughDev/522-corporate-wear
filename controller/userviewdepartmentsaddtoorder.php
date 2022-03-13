<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/522/controller/class/item.php");

    $_SESSION['order'] = array(
        "id" => $_GET['dept'],
        "products" => array()
    );

    $item = new Item(
        $_POST['colour'],
        $_POST['product-name'],
        $_POST['product-size'],
        $_POST['qty'],
        $_POST['product-id'],
        $_POST['product-gender']
    );

    array_push($_SESSION['order']['products'], $item);
    header("location: ../view/user/userviewdepartment.php?id=" . $_GET['dept']);
?>