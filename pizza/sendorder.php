<?php
//KONEKSZYNY VARIABELSY I INNE 
  $cena=0;
  $con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");  
  $query="SELECT * FROM pizza";
  $result = mysqli_query($con,$query);
echo "Dzieki za zamowienie , zamowiles : <br>";
  while($row = mysqli_fetch_array($result)){
    if(isset($_POST[$row['name']])){
      
      echo "- "  .$row['name']."<br>";
      $cena=$cena + $row['cost'];
      $zapisz="INSERT INTO orders ( name,zamowienie,  cena ) VALUES ('".$_POST['nazwisko']."', '".$row['name']."', '".$row['cost']."' );";
      $query1=mysqli_query($con,$zapisz) or die(mysqli_error($con));
}
     
      
    
  }

echo "Przynies ". $cena." zl do sekretariatu aby zrealizować zamówienie";
?>

