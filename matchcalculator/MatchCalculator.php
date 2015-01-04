<html>
<head>
<title>MatchCalculator - Results</title>
</head>
<body>
<div align ="middle">
<?php

$t1=$_POST['t1p1'] + $_POST['t1p2'] + $_POST['t1p3'] + $_POST['t1p4'] + $_POST['t1p5'];
$t2=$_POST['t2p1'] + $_POST['t2p2'] + $_POST['t2p3'] + $_POST['t2p4'] + $_POST['t2p5'];
$t1=$t1 /5;
$t2=$t2 /5;
if($t1 > $t2){
  echo $_POST['team1'].">".$_POST['team2']."<br>";
}
if($t1 < $t2){
  echo $_POST['team1']."<".$_POST['team2']."<br>";
}
if($t1 == $t2){
  echo "Looks like both teams k/d ratios are equal";
  
}
?>
<br><a href="matchcalculator.html" >Click here to use MatchCalculator again</a><br>
<a href="https://steamcommunity.com/tradeoffer/new/?partner=118598999&token=zJBKiB6s" />DONATE</a><br>
</div>
</body>
</html>
