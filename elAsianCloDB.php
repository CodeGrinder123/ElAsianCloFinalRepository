<?php
include 'db_connection.php';

$firstName = $_POST['fname'];
$lastName = $_POST['sname'];
$Age = $_POST['age'];
$userName = $_POST['username'];
$Password = $_POST['password'];

$sql = "INSERT INTO membership (first_name, last_name, age, user_name, password) VALUES ('$firstName', '$lastName', '$Age', '$userName', '$Password')"; 

if($conn->query($sql)){ 
	echo readfile("http://localhost/elAsianClo.php");
	echo $userName;
} else {
	echo "Fail";
}
?>