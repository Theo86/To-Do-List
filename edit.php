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
                
               <h5><ul><li><a href="loggedin.php"> Home</a><li></ul></h5>
                
                <h6><ul><li><a href="logout.php"> Log Out</a></li></ul></h6>
                
           <h1>Edit your list.</h1>
            <div id="form2">
   
   	<form method='post' action='edit2.php'>
    <select class="ent" name='entry'>
    
	<?php
	while($row = mysql_fetch_array($result)){
		
		echo "<option value='" . $row['eid'] . "'>" . $row['entry'] . "</option>";	
		
	}


?>
	</select><br/>
    <input class="text2" name='newtext'></input><br/>
    <input type="submit"/>
	</form>
    <p><a href="loggedin.php">Back</a></p>
    
    </div>
  				</div><!-- end col1 -->
        		<div id="col2">
                
                <?php
                echo "<h2>hey, " . $_SESSION['active']['username'] . "</h2>","<br/>","<br/>";
				?><p>Welcome to your edit page.</p>
                
                
                </div><!-- end col2 -->
                
        		<div class="clear"></div>
            </div><!-- end content -->
            
        	<div id="footer"><p>&copy; 2012 Theodore Ford Webb</p></div><!-- end footer -->
        </div><!-- end wrapper -->
    </body>
</html>




