<?php
$server = "localhost:3308"; 
$username = "root";
$password = "";
$dbname = "members";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error)
		die("Connection Failed");

?>