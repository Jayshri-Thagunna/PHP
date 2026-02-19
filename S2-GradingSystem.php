<?php
    $marks = 70;

    if($marks >= 90) {
        echo "A";
    } else if($marks < 90 && $marks >= 80) {
        echo "B";
    } else if($marks < 80 && $marks >= 70) {
        echo "C";
    } else if($marks < 70) {
        echo "F";
    } else {
        echo "Enter valid number!";
    }
?>