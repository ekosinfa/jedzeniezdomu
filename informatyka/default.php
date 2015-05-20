<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome = 1"
		<title>Smieszne Obrazki -top 10 i wiecej</title>
		<meta name="description" content="Smieszne obrazki,koty"
		<meta name="keywords" contect="Smieszne,Koty,obrazki,hahaha,slownik SJP"
	</head>
		<body>
			<?php
				$id;$$rank;$link;$source;
				ini_set('display_errors',1);
				ini_set('display_startup_errors',1);
				error_reporting(-1);
				
				$con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");  
				$query="SELECT * FROM obrazki ORDER BY rank";
				$result = mysqli_query($con,$query);
				 while($row = mysqli_fetch_array($result)) {
						
						//creating message
						echo "<br />";
						echo "<center><h4>Smieszny obrazek nr ".$row['id']."</h4><br />";
						echo '<img src="'.$row['link'].'"<br />';
						echo '<h5><a href="'.$row['zrodlo'].'">zrodlo </h5></center></a>';
						}
?>
			
		</body>
</html>
