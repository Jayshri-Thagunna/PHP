<?php
    $marks = 95;
    if ($marks >= 90) {
        echo "A";
    } else if (80 <= $marks  && 90) {
        echo "B";
    } else if (70 <= $marks && 80) {
        echo "C";
    } else {
        echo "F";
    }
?>