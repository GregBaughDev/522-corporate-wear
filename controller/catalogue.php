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

    function itemComponent ($name, $img) {
        return "<div><h4>$name</h4><img src=\"../$img\" alt=\"Image of $name\"></div>";
    }
?>