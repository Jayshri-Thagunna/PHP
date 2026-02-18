<?php
    $name = "";
    $marks = 0;
    $daysLate = 0;
    $currentPenalty = 0;
    $maxPenalty = 15;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $marks = $_POST["marks"];
        $daysLate = $_POST["daysLate"];
    }    
    $applyCap = function() {
        return 0;
    };

    $currentPenalty = 2 * $daysLate;
    $marks -= (2 * $daysLate);

    if ($marks < 0) {
        $marks = $applyCap();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penaly System</title>
</head>
<body>
    <form method="POST"> 
        Student Name: <input type="text" name="name" required>
        Asssignment Marks: <input type="number" name="marks" required>
        Days Late: <input type="number" name="daysLate" required>
<br/>
        Total Penalty: <?php echo $currentPenalty ?> <br/>
        Total Marks after penalty: <?php echo $marks ?> <br/>
        <input type="submit" value="Submit">

    </form>
</body>
</html>