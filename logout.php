<?php

	include "functions.php";
	session_destroy();
	unset($_SESSION['active']);

	header("location:index.php");


?>