<?php
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST["operator"];
    $operation = "";

    echo "<center>Your answer is: $operation";

    if($operator == "add"){
        echo "$operation". $number1 + $number2;
    }
    else if($operator == "sub"){
        echo "$operation" . $number1 - $number2;
    }
    else if($operator == "mul"){
        echo "$operation" . $number1 * $number2;
    }
    else if ($operator == "div"){
    echo "$operation" . $number1 / $number2;
    }

?>