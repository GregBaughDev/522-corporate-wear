<?php
    function deleteSuccess() {
        return 
            "<div class='del-response'>
                <h3>Department deleted</h3>
            </div>";
    }

    function deleteFailure() {
        return
            "<div class='del-response'>
                <h3>Failed to delete - try again</h3>
            </div>";
    }


?>