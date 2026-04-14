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

function fetchDb() {
    global $conn;
    $selectAllQuery = "SELECT *FROM users";
    $result = mysqli_query($conn, $selectAllQuery);
    $numRows = mysqli_num_rows($result);
    echo " Number of rows:  " . $numRows ." ";


    if($numRows > 0) {
        // $row = mysqli_fetch_assoc($result); // return only 1 row
        // $row = mysqli_fetch_all($result); // return all records
        // echo var_dump($row);
        
        while($row = mysqli_fetch_assoc($result)){
            echo " Hello " . $row['name']. " Your age is ".$row['age'];
        }
    }
}
fetchDb();


?>