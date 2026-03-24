<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Student Name: <input type = "text" name = "Name" placeholder = "Enter your name"><br>
    Email ID: <input type = "email" name = "Email" placeholder = "gmail.com"><br>
    Course Name: <input type = "text" name = "Course" placeholder ="Enter your course name"><br>
    Registration Id: <input type = "text" name = "Reg" placeholder = "eg: CS-2026-105"><br>
    <br>
    <input type ="submit" value ="Submit">
</form>
<hr>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $course = $_POST['Course'];
    $reg = $_POST['Reg'];

    $upercase = strtoupper($name);
    echo "Student Name: $upercase <br>";

    $domain = strstr($email, "@gmail.com");
    echo "Email Domain: $domain <br>";

    $count = strlen($course);
    echo "Course Name: $count <br>";

    $replace = str_replace("CS", "COURSE", $reg);
    echo "Modified Registration ID: $replace <br>";

    echo "<br>";
    
    function verifyRegistration($email, $course){

        $checkmail = strpos($email, "@gmail.com");
        $checkcourse = stripos($course, "Programming");

        if($checkmail !== false && $checkcourse !== false){
            echo "Verification Result: Valid Registration <br>";
        }else{
            echo "Verification Result: Not Valid <br>";
        }
    }
    verifyRegistration($email, $course);
    echo "<br>";
    echo "<br>";

    echo "Using print_r: <br>";
    print_r($reg);

    echo"<br>";

    echo "<br> Using var_dump(): <br>";
    var_dump($name);
    echo "<br>";
    var_dump($email);
    
    }
?>
</body>
</html>

