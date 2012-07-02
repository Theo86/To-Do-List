<?php
session_start();
$connection = mysql_connect("localhost","root","root") or die("omg!");
$db = mysql_select_db("ToDoList") or die("oh boy!");




?>