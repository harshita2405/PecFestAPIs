<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="PecFest";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

//Create database
/*$sql = "CREATE DATABASE PecFest";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->query("use Pecfest");*/
?>