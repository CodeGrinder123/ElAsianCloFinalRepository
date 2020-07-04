<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/
$server = "localhost:3308"; 
$username = "root";
$password = "";
$dbname = "members";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error)
		die("Connection Failed");

?>