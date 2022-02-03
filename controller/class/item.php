<?php

class Item {
    private $colour;
    private $name;
    private $category;
    private $size;
    private $gender;
    private $quantity;
    private $id;

    function __construct($itemColour, $itemName, $itemCategory, $itemSize, $itemQuantity, $id, $itemGender = "Unisex") {
        $this->colour = $itemColour;
        $this->name = $itemName;
        $this->category = $itemCategory;
        $this->size = $itemSize;
        $this->quantity = $itemQuantity;
        $this->id = $id;
        $this->gender = $itemGender;
    }

    function editItem(string $attribute, string $newValue) {
        $this->$attribute = $newValue;
    }
 
    function getItem(string $attribute) {
        return $this->$attribute;
    }

    function allInfo() {
        return array(
            "colour" => $this->colour,
            "name" => $this->name,
            "category" => $this->category,
            "size" => $this->size,
            "gender" => $this->gender,
            "qty" => $this->quantity
        );
    }

}


?>