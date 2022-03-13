<?php 
    
    function retrieveDepartment($cxid, $id, $conn) {
        try {
            $departmentRetrieve = "SELECT name FROM corporate_wear.department WHERE customerId = :cxid AND id = :id";
            $departmentRetrieve = $conn->prepare($departmentRetrieve);
            $departmentRetrieve->bindParam(':cxid', $cxid);
            $departmentRetrieve->bindParam(':id', $id);
            $departmentRetrieve->execute();
            $departmentRetrieve = $departmentRetrieve->fetchAll();

            $productRetrieve = "SELECT name, id FROM corporate_wear.catalogue
                WHERE id IN (SELECT product FROM corporate_wear.department_products WHERE department = :id AND company = :cxid)";
            $productRetrieve = $conn->prepare($productRetrieve);
            $productRetrieve->bindParam(':cxid', $cxid);
            $productRetrieve->bindParam(':id', $id);
            $productRetrieve->execute();
            $productRetrieve = $productRetrieve->fetchAll();

            return array($departmentRetrieve, $productRetrieve);
        } catch (PDOException $e) {
            error_log($e->getMessage(), 0);
            header("location: ../view/user/userviewdepartment.php");
        }
    }

?>  