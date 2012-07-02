<?php

	include "functions.php";
	
	$eid = $_POST['entry'];
	$newtext = $_POST['newtext'];
	
	$query = "UPDATE entries SET entry='$newtext' WHERE eid = '$eid'";
	
	mysql_query($query);
	
	header("location:loggedin.php");


?>