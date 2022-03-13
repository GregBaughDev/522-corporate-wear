<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

    try {
        $addDeptProd = "INSERT INTO corporate_wear.department_products (product, department, company) VALUES
        (:product, :department, :company)";
        $addDeptProd = $conn->prepare($addDeptProd);
        $addDeptProd->bindParam(':product', $_POST['product-select']);
        $addDeptProd->bindParam(':department', $_GET['deptid']);
        $addDeptProd->bindParam(':company', $_SESSION['user'][0]['id']);
        $addDeptProd->execute();
        header("location: ../view/user/userviewdepartment.php?id=" . $_GET['deptid']);
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }
?>