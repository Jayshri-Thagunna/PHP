<?php
$email = '';
$rating = '';
$session = '';
$suggestions = '';

$isSubmitted = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'];
    $rating = $_POST['exp'];
    $session = $_POST['session'];
    $suggestions = $_POST['textarea'];
    $isSubmitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>

<body>
    <form method="post">
        Enter your email: <input name="email" type="email" required> <br />

        Overall Event Rating:
        <br />

        <input type="radio" name="exp" value="1"> &#11088;
        <br />
        <input type="radio" name="exp" value="2"> &#11088; &#11088;
        <br />
        <input type="radio" name="exp" value="3"> &#11088; &#11088; &#11088;
        <br />
        <input type="radio" name="exp" value="4"> &#11088; &#11088; &#11088; &#11088;
        <br />
        <input type="radio" name="exp" value="5"> &#11088; &#11088; &#11088; &#11088; &#11088;
        <br />

        <h3>Most liked Session</h3>
        Session:
        <select name="session">
            <option value="AI">AI</option>
            <option value="Cloud Computing">Cloud Computing</option>
            <option value="Cyber Security">Cybersecurity</option>
        </select>
        <br />

        <h3>Suggestions for improvement</h3> <textarea name="textarea"></textarea>
        <input type="submit" value="Proceed">

    </form>

    <?php if ($isSubmitted): ?>

        <h2>Feedback Submitted</h2>
        <p>Email: <?php echo $email; ?></p>
        <p>Rating: <?php echo $rating; ?></p>
        <p>Most liked session: <?php echo $session; ?></p>
        <p>Suggestions: <?php echo $suggestions; ?></p>

        <p>Thank You</p>

        <a href="register.php">Register Again</a>

    <?php endif; ?>
</body>

</html>


