<?php

include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

function getItem($id, $conn){
    try {
        $item = "SELECT * FROM corporate_wear.catalogue WHERE id = :id";
        $item = $conn->prepare($item);
        $item->bindParam(':id', $id);
        $item->execute();
        $item = $item->fetchAll();
        return $item;
    } catch (PDOexception $e) {
        error_log($e->getMessage(), 0);
    }
}

?>