<?php

	include "functions.php";
	
	$uid = $_SESSION['active']['uid'];

	$query = "SELECT * FROM entries WHERE uid = '$uid'";
	$result = mysql_query($query);
	
	?>
    
    <!doctype html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>My To Do List</title>
        
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>
    
    <body>
    	<div id="wrapper">
           
             
             
           <div id="content">
            	<div id="col1">
                
               <h5><ul><li><a href="loggedin.php.php"> Home</a><li></ul></h5>
                
                <h6><ul><li><a href="logout.php"> Log Out</a></li></ul></h6>
                
      <?php
	
	if(isset($_SESSION['active'])){
	
	echo "<h1>Completed List</h1>","<br/>","<br/>";
	echo "<a id='add' href='loggedin.php'>Go Back.</a>";
	echo "<br/><br/>";
	
	
	
	$uid = $_SESSION['active']['uid'];
	$query = "SELECT * FROM entries WHERE uid = '$uid'";
	$result = mysql_query($query);
		while($row = mysql_fetch_array($result)){
			echo "<span class ='entry'>" . $row['entry'];
			
			echo "<br/>";
			
		}
	
	
	
	}
	
				?>
                 
                
                
            <div id="form2">
    
   	
    
	<?php
	while($row = mysql_fetch_array($result)){
		
		echo "<option value='" . $row['eid'] . "'>" . $row['entry'] . "</option>";	
		
	}


?>
    
    </div>
  				</div><!-- end col1 -->
        		<div id="col2">
                
                <h2>Completed List Items.</h2>
                <p>Here will store <br/>your completed list items.</p>
                
                </div><!-- end col2 -->
                
        		<div class="clear"></div>
            </div><!-- end content -->
            
        	<div id="footer"><p>&copy; 2012 Theodore Ford Webb</p></div><!-- end footer -->
        </div><!-- end wrapper -->
    </body>
</html>




