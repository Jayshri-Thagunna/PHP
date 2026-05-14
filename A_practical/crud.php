<?php
$conn = new mysqli("localhost", "root", "", "company_db");

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO members (name, email) VALUES ('$name', '$email')");
    header("location: application.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM members WHERE id=$id");
    header("location: index.php");
}

$update_id = 0;
$update_name = '';
$update_email = '';
if (isset($_GET['edit'])) {
    $update_id = $_GET['edit'];
    $res = $conn->query("SELECT * FROM members WHERE id=$update_id");
    $row = $res->fetch_assoc();
    $update_name = $row['name'];
    $update_email = $row['email'];
}

if (isset($_POST['save_update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE members SET name='$name', email='$email' WHERE id=$id");
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP CRUD</title>
    <style>
        body { font-family: Arial; margin: 40px; line-height: 1.6; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        .form-box { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; margin-bottom: 20px; }
        .btn-delete { color: red; }
    </style>
</head>
<body>

    <h2>Member Management (CRUD)</h2>

    <div class="form-box">
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $update_id; ?>">
            <input type="text" name="name" placeholder="Name" value="<?php echo $update_name; ?>" required>
            <input type="email" name="email" placeholder="Email" value="<?php echo $update_email; ?>" required>
            
            <?php if ($update_id != 0): ?>
                <button type="submit" name="save_update">Update Member</button>
            <?php else: ?>
                <button type="submit" name="add">Add Member</button>
            <?php endif; ?>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM members");
            while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="index.php?edit=<?php echo $row['id']; ?>">Edit</a> | 
                        <a href="index.php?delete=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>