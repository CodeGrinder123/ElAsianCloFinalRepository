<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/
include 'db_connection.php';

$uname = $_POST['username'];

$sql = "DELETE FROM membership WHERE user_name='".$uname."'";

if($conn->query($sql)){
	//$homeFile = file_get_contents('http://localhost/elAsianCloLogin.php');
	//echo $homeFile;
	echo "success";
} else {
	//$retryFile = file_get_contents('http://localhost/elAsianCloMemberPage.php');
	//echo $retryFile;
	echo "fail";
}

?>