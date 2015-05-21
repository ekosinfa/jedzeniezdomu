<?php
	//Conection variables & displaying errors
				ini_set('display_errors',1);
				ini_set('display_startup_errors',1);
				error_reporting(-1);
				echo"<meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome = 1"";
				
				$con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");  
				
	//Sprawdzenie hasla
	if($_POST['password'] != "imbir"){
		exit('Zle haslo , kliknij <a href="admin.html">tu</a> aby powroicdo panelu admina.');
		}
			$query = "INSERT INTO obrazki (link,zrodlo) VALUES (".$_POST['link'].",".$_POST['zrodlo'].")";
			$result = mysqli_query($con,$query);
if(!result){exit("problem z baza danych mysql");}
echo mysqli_error($result);














?>