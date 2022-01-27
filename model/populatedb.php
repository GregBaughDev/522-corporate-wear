<?php

require('./conn/conn.php');

$clothing = array(
    'Polo', 
    'Button Up', 
    'T Shirt', 
    'Trousers', 
    'Shorts', 
    'Skirt', 
    'Dress', 
    'Suit Jacket', 
    'Work Shorts', 
    'Boots', 
    'Shoes', 
    'Waistcoat',
    'Coat',
    'Rainjacket',
    'Socks',
    'Handkerchief',
    'Blouse'
);

$merchandise = array(
    'Pen',
    'Pencil',
    'Water Bottle',
    'Notebook',
    'Mouse pad',
    'Tote Bag',
    'Poster',
    'Flyer',
    'Keyring',
    'Hats',
    'Lanyards',
    'Mug',
    'Coffee Keepcup',
    'Phone Case',
);

try {
    for($i = 0; $i < count($clothing); $i++){
        $insertClothing = "INSERT INTO corporate_wear.catalogue (name, category, img)
        VALUES (:name, 'clothing', 'public/assets/images/Catalogue/clothing.jpeg')";
        $insertClothing = $conn->prepare($insertClothing);
        $insertClothing->bindParam(":name", $clothing[$i]);
        $insertClothing->execute();
    };
    echo("\nClothing added to database!");
    for($i = 0; $i < count($merchandise); $i++){
        $insertMerchandise = "INSERT INTO corporate_wear.catalogue (name, category, img)
        VALUES (:name, 'merchandise', 'public/assets/images/Catalogue/merch.jpeg')";
        $insertMerchandise = $conn->prepare($insertMerchandise);
        $insertMerchandise->bindParam(":name", $merchandise[$i]);
        $insertMerchandise->execute();
    };
    echo("\n Merchandise added to database!");
    $newUser = "INSERT INTO corporate_wear.customer (company, contact, streetAddress, city, state, postcode, phone, email, password)
        VALUES ('test_company', 'test user', '123 test rd', 'Melbourne', 'VIC', '3000', '0480 123 456', 'test@user.com', 'test1234')";
    $newUser = $conn->prepare($newUser);
    $newUser->execute();
    $departments = "INSERT INTO department (customerId, name) VALUES (1, 'caretakers'), (1, 'FOH')";
    $departments = $conn->prepare($departments);
    $departments->execute();
    echo("\n Finished adding to database!");
} catch (PDOException $e) {
    echo("\n Error adding to database!");
    error_log($e->getMessage(), 0);
}

?>