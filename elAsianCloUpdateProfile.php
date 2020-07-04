<?php 
include 'db_connection.php'; 

$f_name = $_POST['fname'];
$s_name = $_POST['sname'];
$age = $_POST['age'];
$uname = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE membership SET user_name='".$uname."', password='".$password."' WHERE first_name='".$f_name."'";
$sqlDelete = "DELETE FROM membership WHERE user_name='".$uname."'";

if(isset($_POST['update'])){
	if($conn->query($sql)){
			$homeFile = file_get_contents('http://localhost/elAsianClo.php');
			echo $homeFile;
		} else {
			$retryFile = file_get_contents('http://localhost/elAsianCloMemberPage.php'); 
			echo $retryFile;
		}
} else if(isset($_POST['Delete'])){
	if($conn->query($sqlDelete)){
			$homeFile = file_get_contents('http://localhost/elAsianCloLogin.php');
			echo $homeFile;
		} else {
			$retryFile = file_get_contents('http://localhost/elAsianCloMemberPage.php');
			echo $retryFile;
		}
}
?>