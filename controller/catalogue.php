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
?>