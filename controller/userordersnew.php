<?php   
    session_start();
    
    $deptArr = explode(' ', $_POST['dept']);
    
    $order = array(
        "dept" => $deptArr[1],
        "id" => $deptArr[0], 
        "items" => array()
    );
    
    array_push($_SESSION['orders'], $order);
    header('location: ../view/user/userorders.php');

?>