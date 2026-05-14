<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "company_db";

$conn = new mysqli($host, $user, $pass, $db);

if($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search = $_GET['search'] ?? '';
$role = $_GET['role'] ?? '';
$sort = $_GET['sort'] ?? 'id';

$sql = "SELECT * FROM users WHERE 1 = 1";

if(!empty($search)){
    $sql .= " AND username LIKE '%$search%'";
}

if(!empty($role)){
    $sql .= " AND role = '$role'";
}

$allowed_sorts = ['username', 'email', 'role'];
if(in_array($sort, $allowed_sorts)){
    $sql .= " ORDER BY $sort ASC";
}

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background: #f4f7f6; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background: #333; color: white; }
        .controls { margin-bottom: 20px; background: #eee; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>User Directory</h2>

    <div class="controls">
        <form method="GET">
            <input type="text" name="search" placeholder="Search by name..." value="<?php echo $search; ?>">
            
            <select name="role">
                <option value="">All Roles</option>
                <option value="Admin" <?php if($role=='Admin') echo 'selected'; ?>>Admin</option>
                <option value="Editor" <?php if($role=='Editor') echo 'selected'; ?>>Editor</option>
                <option value="User" <?php if($role=='User') echo 'selected'; ?>>User</option>
            </select>

            <button type="submit">Apply Filters</button>
            <a href="users.php">Reset</a>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th><a href="?sort=username">Username ↑</a></th>
                <th><a href="?sort=email">Email ↑</a></th>
                <th><a href="?sort=role">Role ↑</a></th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="4">No users found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
