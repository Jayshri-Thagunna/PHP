<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn){
    die("connection failed".mysqli_connect_error());
}else{
    echo "Conecction Sucessful";
}

//to create database

$php = "Easy";
$ml = "good";
$java = "hard";

$sql = "INSERT INTO feedback (php,ml,java) VALUES ('$php', '$ml', '$java');";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Data Inserted sucessfully <br>";
}else{
    echo "Failed to insert data", mysqli_error($conn);
}
?>