<!DOCTYPE html>
<html lang="en">
<head>
    <title>String Reformatter</title>
</head>
<body>
    <h2>String Reformatter</h2>
    
    <!-- The HTML Form -->
    <form method="POST" action="">
        <label for="user_input">Enter a string:</label><br>
        <input type="text" id="user_input" name="user_input" required>
        <button type="submit" name="submit">Process String</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // 1. Accept the string from the form
        $originalString = $_POST['user_input'];

        // 2. Convert to uppercase
        $upperString = strtoupper($originalString);

        // 3. Replace spaces with underscores
        $modifiedString = str_replace(' ', '_', $upperString);

        // 4. Count characters in the modified string
        $charCount = strlen($modifiedString);

        // Display results
        echo "<h3>Results:</h3>";
        echo "<p><strong>Original:</strong> " . htmlspecialchars($originalString) . "</p>";
        echo "<p><strong>Modified:</strong> " . htmlspecialchars($modifiedString) . "</p>";
        echo "<p><strong>Character Count:</strong> " . $charCount . "</p>";
    }
    ?>
</body>
</html>

