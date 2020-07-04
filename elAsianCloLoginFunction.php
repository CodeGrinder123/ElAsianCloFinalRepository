<?php
include 'db_connection.php';

	$sql = "SELECT user_name, password FROM membership";
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc()){
		if($_POST['username'] == $row["user_name"] && $_POST['password'] == $row["password"]){ 
			$homeFile =  file_get_contents('http://localhost/elAsianClo.php');
			echo $homeFile;
		} else {
			$retryFile = file_get_contents('http://localhost/elAsianCloLoginFAILED.php'); 
			echo $retryFile;
		}
		exit();
	}
?>