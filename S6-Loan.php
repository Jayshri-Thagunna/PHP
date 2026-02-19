<?php
    $age = 21;
    $monthlyIncome  = 1000;

    if(($age >= 21 && $age <= 60) && ($monthlyIncome >= 25000)) {
        echo "You are eligible for loan!";
    } else {
        echo "You are not eligible for loan!";
    }
?>