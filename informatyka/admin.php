<?php
				ini_set('display_errors',1);
				ini_set('display_startup_errors',1);
				error_reporting(-1);
				
				$con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");  
				$query="SELECT * FROM obrazki ORDER BY rank";
				$result = mysqli_query($con,$query);
if($_POST['password'] != "imbir"){
	exit('Zle haslo , kliknij <a href="admin.html">tu</a> aby powrócić do panelu admina.')
	}
















?>