<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="S4Age.php">
        Enter the age: <input type ="number" name="age" placeholder="eg: 18">
        <br>
        <input type ="submit" value="submit">
    </form>

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

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
    }
?>

</body>
</html>