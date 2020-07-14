<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/
include 'db_connection.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Age = $_POST['age'];
$userName = $_POST['username'];
$Password = $_POST['password'];
$retypePassword = $_POST['retypePassword'];

$sql = "INSERT INTO membership (first_name, last_name, age, user_name, password) VALUES ('$firstName', '$lastName', '$Age', '$userName', '$Password')"; 

if($Password === $retypePassword){
	if($conn->query($sql)){ 
		echo readfile("http://localhost/elAsianClo.php");
		echo $userName;
		echo '<script>alert("Welcome to our El Asian Clo. family!")</script>';
	} else {
		echo "Fail";
	}
} else {
	echo '<script>alert("Password is not the same!")</script>';
	$retryPage = file_get_contents('http://localhost/elAsianCloSignUpPage.php');
	echo $retryPage;
}
?>