<?php

require('../class/item.php');
require('../class/order.php');

$newItem = new Item(
    $_POST['colour'],
    $_GET['name'],
    $_GET['cat'],
    $_POST['size'],
    $_POST['quantity'],
    $_POST['gender']
);

//Add to new order

// Keep current order in session
?>