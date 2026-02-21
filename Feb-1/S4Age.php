<?php
    $age = $_POST['age'];
    
    if($age < 12 ){
        echo "Child";
    } else if($age >= 18 && $age < 18) {
        echo "Teenager";
    } else if($age >= 18 && $age < 60) {
        echo "Adult";
    } else if($age >= 60) {
        echo "Senior Citizen";
    } else {
        echo "Enter correct number!";
    }
?>