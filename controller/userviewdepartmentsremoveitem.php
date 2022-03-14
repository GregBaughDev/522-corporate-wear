<?php
    session_start();

    array_splice($_SESSION['order'][$_GET['dept']]['products'], $_POST['item-remove'], 1);

    header("location: ../view/user/userviewdepartment.php?id=" . $_GET['dept']);
?>