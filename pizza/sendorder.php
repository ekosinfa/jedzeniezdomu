<?php
//KONEKSZYNY VARIABELSY I INNE 
  $cena=0;
  $con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");  
  $query="SELECT * FROM pizza";
  $result = mysqli_query($con,$query);

  while($row = mysqli_fetch_array($result)){
    if(isset($_POST[$row['name']])){
      
      echo $row['name']."<br>";
      $cena=$cena + $row['cost'];
      $zapisz="INSERT INTO orders ( order , cena ) VALUES ('makarena' , '".$row['cost']."' );";
      $query1=mysqli_query($con,$zapisz);
}
     
      
    
  }
echo $zapisz;
echo $cena;
?>
