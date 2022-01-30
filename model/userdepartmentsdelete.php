<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");
    
    try {
        $departmentDelete = "DELETE FROM corporate_wear.department WHERE id = :id";
        $departmentDelete = $conn->prepare($departmentDelete);
        $departmentDelete->bindParam(':id', $_POST['dept']);
        $departmentDelete->execute();
        header("location: ../view/user/userdepartments.php?del=succ");
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
        header("location: ../view/user/userdepartments.php?del=fail");
    }

?>  