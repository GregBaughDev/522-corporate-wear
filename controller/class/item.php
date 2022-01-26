<?php

class Item {
    private $colour;
    private $name;
    private $category;
    private $size;
    private $gender;
    private $quantity;

    function __construct($itemColour, $itemName, $itemCategory, $itemSize, $itemQuantity, $itemGender = "Unisex") {
        $this->colour = $itemColour;
        $this->name = $itemName;
        $this->category = $itemCategory;
        $this->size = $itemSize;
        $this->quantity = $itemQuantity;
        $this->gender = $itemGender;
    }

    function editItem(string $attribute, string $newValue) {
        $this->$attribute = $newValue;
    }
 
    function getItem(string $attribute) {
        return $this->$attribute;
    }

}


?>