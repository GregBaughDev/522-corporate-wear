<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");
    session_start();

    try {
        $departmentProductDelete = "DELETE FROM corporate_wear.department_products WHERE company = :company AND product = :product AND department = :dept";
        $departmentProductDelete = $conn->prepare($departmentProductDelete);
        $departmentProductDelete->bindParam(':company', $_SESSION['user'][0]['id']);
        $departmentProductDelete->bindParam(':product', $_POST['product']);
        $departmentProductDelete->bindParam(':dept', $_GET['dept']);
        $departmentProductDelete->execute();
        header("location: ../view/user/userviewdepartment.php?id=" . $_GET['dept'] ."&del=1");
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
        header("location: ../view/user/userdepartments.php?del=fail");
    }

?>  