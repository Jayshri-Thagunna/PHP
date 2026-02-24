<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter your name = <input type="text" name="name" placeholder="Enter your name"><br>
    <button>Submit</button>

    <?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $name = $_POST['name'];

        $str_lower = strtolower($name);
        $str_main = ucfirst($name);
        
        echo "<br><br>Hello, $str_main in PHP";

    }
    ?>
</form>
</body>
</html>