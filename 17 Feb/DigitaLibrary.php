<?php 
function calculateFine($amount, $daysLate) {
    $finePerDay = 10;
    return $amount + ($daysLate * $finePerDay);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $daysLate = $_POST['days'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>Digital Library</title>
</head>
<body>
    <h1>Digital Library Late Fee System</h1>
    <form method="POST">
        Enter Student Name: <input type="text" name="name" placeholder="eg. Jayhsri">     
        <br>
        Enter Book Amount: <input type="number" name="amount" placeholder="eg. 500">     
        <br>
        <label>Book Type</label>
        <select name="book_type">
            <option value="Regular">Regular</option>
            <option value="Reference">Reference</option>
        </select>
        <br>
        Enter Days Late: <input type="number" name="days" placeholder="eg. 1">     
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


