<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    
    $bmi = $weight / ($height * $height);

    if($bmi < 18.5) {
        echo "Underweight";
    } else if ($bmi >= 18.5 && $bmi < 24.9) {
        echo "Normal";
    } else if ($bmi >= 25 && $bmi < 29.9) {
        echo "Overweight";
    } else if ($bmi >= 30) {
        echo "Obesity";
    } else
        echo "Enter the current value";
?>