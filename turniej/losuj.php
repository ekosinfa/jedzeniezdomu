<html>
<head>
<title>Losowanie</title>
</head>
  <body>
    <a href="losuj.php">kliknij tu aby losowac jeszcze raz</a><br>
    <b>przed kliknieciem przycisku zdecydujcie kto jest osoba a i b</b><br>
  <?php
$number=rand(0,100);
if($number < 50){
echo "<b>osoba A wybiera mape , a osoba B strone(CT lub T)</b>";}else{
echo "<b>osoba B wybiera mape , a osoba A strone(CT lub t)</b>";
}
?>
  </body>
</html>

