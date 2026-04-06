<?php


$conn = mysqli_connect("localhost","root","", "mydb");

if(!$conn){
    die("connection failed".mysqli_connect_error());
}else{
    echo "Conecction Sucessful";
}

// $query = "insert into users(name,age) values(\"Jais\", 22)";
// mysqli_query($conn, $query);
$query2 = "insert into users(name,age) values(\"PoguLal\", 24)";
mysqli_query($conn, $query2);

?>