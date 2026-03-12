<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
    <form method = "post">
    Student name: <input type="text" placeholder="Enter your name" name="Name"><br>
    Roll No: <input type="number" placeholder="eg 4" name ="Rollno"><br>
    Subject1: <input type ="number" name="marks[]"><br>
    Subject2: <input type ="number" name="marks[]"><br>
    Subject3: <input type ="number" name="marks[]"><br>
    Subject4: <input type ="number" name="marks[]"><br>
    Subject5: <input type ="number" name="marks[]"><br>
    
    <input type=submit value="Submit">
</form>

<?php

    if(isset($_POST['marks'])){
    $name = $_POST['Name'];
    $rollno = $_POST['Rollno'];
    $marks = $_POST['marks'];

    calculateResult($marks);
    }

    $max_marks = 100;

    function calculateResult($marks){

        $total = 0;

        for($i = 0; $i < 5; $i++){
            $total = $total + $marks[$i];
        }
        echo "Total Marks= ".$total."<br>";

        $percentage = $total / 5;

        if($percentage >= 90){
            echo "A+";
        } else if($percentage >= 75){
            echo "A";
        } else if($percentage >= 60){
            echo "B";
        } else if($percentage >= 50){
            echo "C";
        } else if($percentage < 50){
            echo "Fail";
        }
    }
?>
</body>
</html>

