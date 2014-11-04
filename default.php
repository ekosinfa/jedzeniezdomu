
<?php
echo "<h3><font  face="Verdana">Zamów obiad przez internet!</font><h3>";

$con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT name, cost, description FROM menu WHERE type="pizza");

echo "<table border='1'>
<tr>
<th>Nazwa</th>
<th>Opis</th>
<th>Cena</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['cost'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
