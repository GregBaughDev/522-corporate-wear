<?php

class Order {
    public $company = '';
    public $department = '';
    public $itemArray = array();

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

    function orderDept() {
        return $this->department;
    }
    
    function currentOrder() {
        return $this->itemArray;
    }
}

?>