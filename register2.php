<?php
	include "functions.php";
	
	
	
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	

	$password = sha1($password);
	

	$query = "INSERT INTO users (username, password) 
	VALUES('$username','$password')";

	mysql_query($query);
	
	$query2 = "SELECT * FROM users WHERE username = '$username'";
	$result = mysql_query($query2);
	$array = mysql_fetch_array($result);
	$_SESSION['active'] = $array;
	
	header("location:loggedin.php");



?>