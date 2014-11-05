<?php
echo '<h3><font  face="Verdana">Zamawiaj obiad przez internet!</font><h3>';
echo '<form>';

$con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM menu WHERE type ='pizza'");

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
echo "<td> <input type='checkbox' name='".$row['name']."' ></td>";

echo "</tr>";
}
echo "</table>";

echo "</form>";

mysqli_close($con);
?>
