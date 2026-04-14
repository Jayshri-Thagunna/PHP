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

$name = "Aman";
$age = "22";
$course = "java";

$sql = "INSERT INTO details (name, age, course) VALUES ('$name', '$age', '$course');";
$result = mysqli_query($conn, $sql);
$query = "insert into users(name,age,course) values(\"Jais\", 22, \"Java\")";


if($result){
    echo "Data Inserted sucessfully <br>";
}else{
    echo "Failed to insert data", mysqli_error($conn);
}
?>