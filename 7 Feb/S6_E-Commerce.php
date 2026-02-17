<form method="post">
    Name: <input type="text" name="name" required><br>
    Amount: <input type="number" name="amount" required><br>
    Type:
    <select name="type">
        <option value="Regular">Regular</option>
        <option value="Premium">Premium</option>
    </select><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];

    // 1. Calculate Discount
    if ($type == "Premium") {
        $discount = $amount * 0.20;
    } else {
        if ($amount > 10000) {
            $discount = $amount * 0.15;
        } elseif ($amount >= 5000) {
            $discount = $amount * 0.10;
        } else {
            $discount = 0;
        }
    }

    $amountAfterDiscount = $amount - $discount;

    if ($amountAfterDiscount > 8000) {
        $shipping = 0;
    } else {
        $shipping = 200;
    }

    $finalTotal = $amountAfterDiscount + $shipping;

    echo "<h3>Results:</h3>";
    echo "Customer Name: " . $name . "<br>";
    echo "Original Amount: ₹" . $amount . "<br>";
    echo "Discount Applied: ₹" . $discount . "<br>";
    echo "Shipping Charge: ₹" . $shipping . "<br>";
    echo "<b>Final Payable Amount: ₹" . $finalTotal . "</b>";
}
?>