<?php
session_start();

// Dummy credentials
$valid_user = "admin";
$valid_pass = "123";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_user && $password === $valid_pass) {
        // 1. Start Session
        $_SESSION['user'] = $username;
        $_SESSION['logged_in'] = true;

        // 2. Set a Cookie (Optional: "Remember Me" for 1 hour)
        if (isset($_POST['remember'])) {
            setcookie("user_login", $username, time() + 3600, "/");
        }

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Login System</h2>
    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>