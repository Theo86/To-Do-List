<?php
	include "functions.php";
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
                
                <h1>Log In, please.</h1>
                <div id="platform">
                  <div id="form2">  

                    <form method="post" action="login2.php">
                
                Username: <input type="text" name="username"/><br/>
                Password: <input type="password" name="password"/>
                <input type="submit" value="Login"/>
                
                </form></div>
                </div>
                
                </div><!-- end col1 -->
        		<div id="col2">
                <h2>Welcome to your new <br/>To Do list.</h2>
                <p>Here you can, login and logout. <br/>Save your old data and <br/>delete them to.</p><br/>
                
                <p>If you are not a memeber <br/>yet, <a href="register.php">Join Here</a>
                
                </div><!-- end col2 -->
                
        		<div class="clear"></div>
            </div><!-- end content -->
            
        	<div id="footer">
            	<p>&copy; 2012 Theodore Ford Webb</p>
            </div><!-- end footer -->
        </div><!-- end wrapper -->
</body>
</html>
