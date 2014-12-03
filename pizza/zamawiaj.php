<?php
error_reporting(E_ALL);
function DownloadAndDisplay($co){
$con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");  
$query="SELECT * FROM ".$co."";

  $result = mysqli_query($con,$query);
  
echo "<table border='1'>
<tr>
<th>nazwa</th>
<th>opis</th>
<th>cena</th>
<th>zaznacz tu!</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['cost'] . " zl </td>";
echo "<td> <input type='checkbox' name='".$row['name']."' value='".$row['name']."'></td>";
echo "</tr>";
}
mysqli_close($con);
echo "</table>";
echo 'Powyższe pizze zamawiam na :<br>';
echo '<input type="radio" name="cienkieciasto">Cienkim ciescie';
echo '<input type="radio" name="cienkieciasto">Grubym ciescie';

}
echo '<h3><font  face="Verdana">Zamawiaj obiad przez internet!</font><h3>';
echo '<form method="post" action="sendorder.php">';

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
DownloadAndDisplay("pizza");

echo '<br><input type="text" value="wpisz tu swoje nazwisko" name="nazwisko">';
echo '<input type="submit" value="ok">';
echo "</form>";

?>
