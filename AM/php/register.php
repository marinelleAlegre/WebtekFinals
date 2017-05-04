<?php
$servername = "";
$username = "username";
$password = "password";
$dbname = "pertcare";

//Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

//sql create table
$sql = "()";

if ($conn->query($sql) == TRUE){
	echo "Table successfully created";
}else{
	echo "Error creating table: " .$conn->error;
}

$conn->close();
?>