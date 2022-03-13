<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

    $_SESSION['order'] = array(
        "id" => $_GET['dept'],
        "products" => array()
    );

    $item = array(
        "product" => $_POST['product'],
        "qty" => $_POST['qty'],
        "colour" => $_POST['colour'],
        "size" => $_POST['product-size'],
        "gender" => $_POST['product-gender']
    );

    array_push($_SESSION['order']['products'], $item);
    header("location: ../view/user/userviewdepartment.php?id=" . $_GET['dept']);
?>