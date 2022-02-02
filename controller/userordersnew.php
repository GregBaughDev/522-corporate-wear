<?php   
    session_start();
    
    $order = array(
        "dept" => $_POST['dept'],
        "items" => array()
    );

    array_push($_SESSION['orders'], $order);
    header('location: ../view/user/userorders.php');

?>