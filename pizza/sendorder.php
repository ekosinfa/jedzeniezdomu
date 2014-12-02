<?php
//KONEKSZYNY VARIABELSY I INNE 
  $con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");  
  $query="SELECT * FROM ".$co."";
  $result = mysqli_query($con,$query);

  while($row = mysqli_fetch_array($result)){
    if(isset[$row['name']])
      echo $row['name']."<br>";
    
  }
?>
