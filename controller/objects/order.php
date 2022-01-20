<?php

class Order {
    private $company;
    private $department;
    private $itemArray = [];

    function __contstruct($company, $department) {
        $this->company = $company;
        $this->department = $department;
    }

    function addItem($item) {
        array_push($this->itemArray, $item);
    }

    function removeItem($item) {
        $itemLoc = array_search($item, $this->itemArray);
        array_splice($this->itemArray, $itemLoc, 1);
    }
    
    function currentOrder() {
        return $this->itemArray;
    }
}

?>