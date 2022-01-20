<?php

class Item {
    private $colour;
    private $name;
    private $category;
    private $size;
    private $gender;

    function __construct($itemColour, $itemName, $itemCategory, $itemSize, $itemGender = "Unisex") {
        $this->colour = $itemColour;
        $this->name = $itemName;
        $this->category = $itemCategory;
        $this->size = $itemSize;
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