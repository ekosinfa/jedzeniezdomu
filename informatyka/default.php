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
				$con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");  
				$query="SELECT * FROM obrazki ORDER BY rank";
				$result = mysqli_query($con,$query);
				 while($row = mysqli_fetch_array($result)) {
						//declaring variables
						$row['id'] = $id;
						$row['rank'] = $rank;
						$row['link'] = $link;
						$row['zrodlo'] = $source;
						//creating message
						echo "<br />";
						echo "<h1>Smieszny obrazek nr ".$rank."<br />"
						echo "<img src="'.$link.'" />
							
						}

?>
		</body>
</html>