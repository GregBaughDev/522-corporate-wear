<?php

class Department {
    private $customer;
    private $company;
    private $name;

    function __construct($customerName, $companyId, $deptName) {
        $this->customer = $customerName;
        $this->company = $companyId;
        $this->name = $deptName;
    }

    function editName($newName){
        $this->name = $newName;
    }

}

?>