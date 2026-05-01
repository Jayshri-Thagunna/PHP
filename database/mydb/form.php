<?php require('base.php') ?>

<?php
    //Create table structure
    $create = "CREATE TABLE student (sno int PRIMARY KEY, name TEXT, email TEXT, course TEXT)";
    
    //Insert the data
    $query1 = "insert into student (sno, name, eamil, course) values (1, 'Jayshri', 'jayshrithagunna@gmial.com' , 'PHP')";

    $message = " ";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'] ?? null;
        $name = $_POST['name'] ?? "";
        $email = $_POST['email'] ?? "";

        if($id && $name && email) {
            $id = intval($id);
            $id = intval($id);
            $stmt = $connection->prepare("INSERT INTO student(id, name, email) VALUES (?, ?, ?)");
            $stmt->bind_param("isss", $id, $name, $email);
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Add users to the mydb Database</h1>

<?php if($message): ?>
    <p><strong>
<?php echo htmlspecialchars($message); ?>
    </p></strong>
<?php endif; ?>

<form method = "POST" action="">
    <label for="sno">S No:</label>
    <input type="number" id="sno" name="sno" required><br><br>

    <label for = "name">Name:</label>
    <input type = "text" id="name" name="nane" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <button type="submit">Add User</button>
    </form>
</body>
</html>