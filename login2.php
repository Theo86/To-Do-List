<?php
	
	include "functions.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$password = sha1($password);
	
	$query = "SELECT * FROM users WHERE username = '$username'";
	$result = mysql_query($query) or die("not a good username");
	$array = mysql_fetch_array($result);
	if($password == $array['password']){
		$_SESSION['active'] = $array;
		header("location:loggedin.php");
		
	}
	else{
		die("password is not good.");
	}

?>