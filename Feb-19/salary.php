<?php
/*
Write a PHP function calculateNetSalary($basicSalary, $experienceYears) that:
Adds 10% bonus if experience ≥ 5 years
Deducts 5% tax
Returns the final net salary
Call the function and display the result.
*/


$bonus = 10;
$basicSalary = 5000;
$experienceYears = 6;

function calculateNetSalary() {
    global $bonus;
    global $basicSalary;
    global $experienceYears;

    if($experienceYears >= 5) {
       $bonus = $basicSalary * 0.10;
    } else {
        $bonus = $basicSalary * 0.05;
    }

    return $basicSalary + $bonus;
}

calculateNetSalary();
echo "Net Salary: " ,calculateNetSalary($basicSalary, $experienceYears);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    Enter the salary: <inpot type="number" name="basicSalary" placeholder="eg 5000">
    <br>
    Enter the experience: <input type="number" name="$experienceYears" placeholder="eg 5">
    <br>
    <input type="submit" valuue="submit">
    </form>
</body>
</html>