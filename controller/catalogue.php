<?php
    function filter ($term) {
        if($term === 'clo'){
            return "Clothing";
        } else if($term === 'mer'){
            return "Merchandise";
        } else {
            return "All";
        }
    };

    function itemComponent ($name, $img, $id) {
        return "<div><a href=\"item.php?id=$id\"><h4>$name</h4></a><img src=\"../$img\" alt=\"Image of $name\"></div>";
    }
?>