<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "";

    $connection = mysqli_connect($host, $user, $password);

    if (!$connection) {
        die("Error Code: " . mysqli_connect_errno() . " " . mysqli_connect_error() . "\n");
    } else {
        echo "Connected\n";
    }

    $initQueries = [
        "CREATE DATABASE IF NOT EXISTS government",
        "USE government",
        "CREATE TABLE IF NOT EXISTS users (id int PRIMARY KEY, name TEXT, email TEXT, password_hash TEXT)"
    ];

    foreach ($initQueries as $query) {
        mysqli_query($connection, $query);
    }

    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'] ?? null;
        $name = $_POST['name'] ?? "";
        $email = $_POST['email'] ?? "";
        $password_hash = $_POST['password_hash'] ?? "";

        if ($id && $name && $email && $password_hash) {
            $id = intval($id);
            $stmt = $connection->prepare("INSERT INTO users(id, name, email, password_hash) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isss", $id, $name, $email, $password_hash);
            if ($stmt->execute()) {
                $message = "User added successfully!";
            } else {
                $message = "Error: " . mysqli_error($connection);
            }
        } else {
            $message = "Please fill in all fields";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User to Government Database</title>
</head>
<body>
    <h1>Add User to Government Database</h1>
    
    <?php if ($message): ?>
        <p><strong><?php echo htmlspecialchars($message); ?></strong></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password_hash">Password Hash:</label>
        <input type="text" id="password_hash" name="password_hash" required><br><br>

        <button type="submit">Add User</button>
    </form>
</body>
</html>