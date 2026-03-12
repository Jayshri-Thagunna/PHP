<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
</head>
<body>

    <h2>Enter Your Details</h2>
    <form method="POST">
        Name: <input type="text" name="username" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit" name="submit">Submit Details</button>
    </form>

    <hr>

    <?php
    // Step 2: Display the details after submission
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);

        echo "<h3>Your Submitted Details:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br><br>";
        
        // Step 3: Link to the second file
        echo '<a href="feedback.php">Click here for Feedback</a>';
    }
    ?>

</body>
</html>