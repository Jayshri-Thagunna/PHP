<?php
$name = '';
$email = '';
$phone = '';
$session = '';
$exp = '';
$isSubmitted = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $session = $_POST['session'];
    $exp = $_POST['exp'];

    $isSubmitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form method="POST">
        Enter your name: <input name="name" type="text" required> <br />
        Enter your email: <input name="email" type="email" required> <br />
        Enter your phone number: <input name="number" type="number" required>
        <br />
        Session:
        <select name="session">
            <option value="AI">AI</option>
            <option value="Cloud Computing">Cloud Computing</option>
            <option value="Cyber Security">Cybersecurity</option>
        </select>
        <br />

        Experience Level:
        <br />

        <input type="radio" name="exp" value="Beginner"> Beginner
        <br />

        <input type="radio" name="exp" value="Intermediate"> Intermediate
        <br />
        <input type="radio" name="exp" value="Expert"> Expert

        <br />

        <input type="submit" value="Proceed">
    </form>

    <?php if ($isSubmitted): ?>

        <h2>Registration Done</h2>
        <p>Name: <?php echo $name; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone: <?php echo $phone; ?></p>
        <p>Session: <?php echo $session; ?></p>
        <p>Experience Level: <?php echo $exp; ?></p>

        <a href="feedback.php">Submit Feedback</a>

    <?php endif; ?>

</body>

</html>