<?php
    $name = "Jayshri";

    $age = function($no) {
        global $name;
        return $no;
    };

    echo "Your age is: $age(23)";
?>