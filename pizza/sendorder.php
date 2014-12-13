<?php
//KONEKSZYNY VARIABELSY I INNE 
if(!isset($_POST['nazwikso'])){
  exit ('Niestety , nie przyjmujemy zamowien od anonimow,wpisz swe imie i nazwisko na dole');
  
}
  $check=0;
  $cena=0;
  $con=mysqli_connect("localhost","michal","michalxsw21qaz","ekosinfa_michal");  
  $query="SELECT * FROM pizza";
  $result = mysqli_query($con,$query);
echo "Dzieki za zamowienie , zamowiles : <br>";
  while($row = mysqli_fetch_array($result)){
    if(isset($_POST[$row['name']])){
      $check++;
      $pizza="";
          if($_POST['ciasto']=="cienkieciasto"){
          $pizza=$row['name'].'(cienkie ciasto)';
          }
          if($_POST['ciasto']=="grubeciasto"){
          $pizza=$row['name'].'(grube ciasto)';
          }
      echo "- "  .$pizza."<br>";
      $cena=$cena + $row['cost'];
      
      $zapisz="INSERT INTO orders ( name,zamowienie,  cena, confirmation ) VALUES ('".$_POST['nazwisko']."', '".$pizza."', '".$row['cost']."',0 );";
      $query1=mysqli_query($con,$zapisz) or die(mysqli_error($con));
        
      
    
    }
}
     
   if($check==0){
     exit("Nic nie zamowiles :(");
   }
    
  

echo "Przynies ". $cena." zl do sekretariatu aby zrealizowac zamowienie";
?>

