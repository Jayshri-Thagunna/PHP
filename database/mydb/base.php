<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$connection = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("connection failed".mysqli_connect_error());
}else{
    echo "Conecction Sucessful";
}
?>