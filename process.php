<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST['username']);
    $email = ($_POST['email']);


    if(empty($name) || empty($email)){
        echo "Error! Fill all the fields";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error! Correct email format";
    } else {
        echo "Registeration Successful!<br>";
        echo "Welcome, " . htmlspecialchars($name) . "<br>Check confirmation mail on $email";
    }
}
?>