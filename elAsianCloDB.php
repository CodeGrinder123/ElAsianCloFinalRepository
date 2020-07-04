<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/
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