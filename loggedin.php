<?php
	include "functions.php";
	
?>
<!doctype html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>My To Do List</title>
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/script.js"></script>
        
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>
    
    <body>
    	<div id="wrapper">
        	
            
        	<div id="content">
            	<div id="col1">
                
                <h5><ul><li><a href="loggedin.php"> Home</a><li></ul></h5>
                
                <h6><ul><li><a href="logout.php"> Log Out</a></li></ul></h6>
           
            <?php
	
	if(isset($_SESSION['active'])){
	
	echo "<h1>Welcome, " . $_SESSION['active']['username'] . "!</h1>","<br/>","<br/>";
	echo "<a id='add' href='add.php'>Add a To Do item.</a>";
	echo "<a id='edit' href='edit.php'>Edit a To Do item.</a><br/><br/>";
	
	
	echo "<div id='platform'>";
	$uid = $_SESSION['active']['uid'];
	$query = "SELECT * FROM entries WHERE uid = '$uid'";
	$result = mysql_query($query);
		while($row = mysql_fetch_array($result)){
			echo "<span class ='entry'>" . $row['entry'];
			echo "<a class='delete' href='delete.php?eid=" . $row['eid'] . "'>Delete</a></span>";
			echo "<a class='completed' href='completed.php?eid=" . $row['eid'] . "'> Completed?</a></span>";
			echo "<br/>";
		} echo "</div>";
	
	
	
	}
	
				?>
                
             
            </div><!-- end col1 -->
        		<div id="col2">
               
                  <h2>Welcome!</h2>
                <p>We hope you enjoy your stay.</p>
                
                </div><!-- end col2 -->
                
        		<div class="clear"></div>
            </div><!-- end content -->
            
        	<div id="footer"><p>&copy; 2012 Theodore Ford Webb</p></div><!-- end footer -->
        </div><!-- end wrapper -->
    </body>
</html>







