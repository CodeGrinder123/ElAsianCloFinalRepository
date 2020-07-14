<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/

include 'db_connection.php';

if(isset($_POST['login'])){
	session_start();
    $uname = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

	$sql = "SELECT count(*) AS cntUser FROM membership WHERE user_name='".$uname."' AND password='".$password."'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	$count = $row['cntUser'];
	if($count > 0){
		echo '<script>alert("Welcome back to El Asian Clo!")</script>';
		$homeFile =  file_get_contents('http://localhost/elAsianClo.php');
		echo $homeFile;
	} else{
		$retryFile = file_get_contents('http://localhost/elAsianCloLoginPage.php'); 
		echo $retryFile;
		echo '<script>alert("Incorrect username or password!")</script>';
		exit();
	}
} else if(isset($_POST['register'])){
	$signUpFile = file_get_contents('http://localhost/elAsianCloSignUpPage.php');
	echo $signUpFile;

} 
?>