<?php
// Named function to calculate fine
function calculateFine($amount, $daysLate) {
    $finePerDay = 10; // fine per day
    return $amount + ($daysLate * $finePerDay);
}

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $amount = $_POST['amount'];
    $daysLate = $_POST['days'];

    // 1. Calculate fine using named function
    $total = calculateFine($amount, $daysLate);

    // 2. Anonymous function to apply cap (maximum limit = 1000)
    $applyCap = function($value) {
        $capLimit = 1000;
        return ($value > $capLimit) ? $capLimit : $value;
    };

    $total = $applyCap($total);

    // 3. Arrow function to add 5% processing charges
    $addProcessing = fn($value) => $value + ($value * 0.05);

    $finalAmount = $addProcessing($total);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fine Calculator</title>
</head>
<body>

<h2>Fine Calculator Form</h2>

<form method="POST">
    Enter Original Amount: 
    <input type="number" name="amount" required><br><br>

    Enter Days Late: 
    <input type="number" name="days" required><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if (isset($finalAmount)) {
    echo "<h3>Final Amount (after cap & 5% processing): " . $finalAmount . "</h3>";
}
?>

</body>
</html>
