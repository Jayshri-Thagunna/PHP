<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
$cookie_info = isset($_COOKIE['user_login']) ? $_COOKIE['user_login'] : "No cookie set.";
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user); ?>!</h1>
    <p>This is a protected dashboard.</p>
    <p><strong>Cookie Data:</strong> <?php echo htmlspecialchars($cookie_info); ?></p>
    
    <a href="logout.php">Logout</a>
</body>
</html>