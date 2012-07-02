<?php
	
	include "functions.php";
	
	$eid = $_GET['eid'];
	
	echo $eid;
	
	$query = "DELETE FROM entries WHERE eid = '$eid'";
	
	mysql_query($query);

	header("location:loggedin.php");


?>