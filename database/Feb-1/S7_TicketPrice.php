<form method="post">
    Movie Name: <input type="text" name="movie" required><br>
    Seat Type:
    <select name="seat">
        <option value="Regular">Regular (₹150)</option>
        <option value="Premium">Premium (₹250)</option>
        <option value="Recliner">Recliner (₹400)</option>
    </select><br>
    Day:
    <select name="day">
        <option value="Weekday">Weekday</option>
        <option value="Weekend">Weekend (+20%)</option>
    </select><br>
    <input type="submit" value="Check Price">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie = $_POST['movie'];
    $seat = $_POST['seat'];
    $day = $_POST['day'];

    if ($seat == "Regular") {
        $price = 150;
    } elseif ($seat == "Premium") {
        $price = 250;
    } else {
        $price = 400; 
    }

    if ($day == "Weekend") {
        $price = $price + ($price * 0.20);
    }

    if ($price > 500) {
        $price = $price - ($price * 0.10);
    }

    // 4. Display Result
    echo "<h3>Booking Summary:</h3>";
    echo "Movie: " . $movie . "<br>";
    echo "Seat Type: " . $seat . "<br>";
    echo "<b>Final Ticket Price: ₹" . $price . "</b>";
}
?>