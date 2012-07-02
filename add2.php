<?php

	include "functions.php";
	$entry = $_POST['entry'];
	
	$entry = mysql_real_escape_string($entry);
	
	$uid = $_SESSION['active']['uid'];
	
$query = "INSERT INTO entries (entry, uid) VALUES ('$entry','$uid')";
	
	mysql_query($query) or die("omg!");
	
	header("location:loggedin.php");
	

?>