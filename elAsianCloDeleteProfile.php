<?php
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