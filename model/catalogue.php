<?php

include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

try {
    $allCatalogue = "SELECT * FROM corporate_wear.catalogue";
    $allCatalogue = $conn->prepare($allCatalogue);
    $allCatalogue->execute();
    $allCatalogue = $allCatalogue->fetchAll();
} catch (PDOexception $e) {
    error_log($e->getMessage(), 0);
}

?>