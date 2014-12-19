<?php 
//Sprawdzanie,czy zmienne są ustawione i inne rzeczy
if(empty($_POST['username'])){
  exit('ERROR:Nie wpisales nazwy uzytkownika');
}
if(empty($_POST['email'])){
  exit('ERROR:Nie wpisales adresu email');
}
if(empty($_POST['imienazwisko'])){
  exit('ERROR:Nie wpisales swego imienia i nazwiska');
}
if(empty($_POST['haslo1'])){
  exit('ERROR:Nie wpisales hasla');
}
if(empty($_POST['haslo2'])){
  exit('ERROR:Nie wpisales hasla');
}
if($_POST['haslo1']!=$_POST['haslo2']){
  exit('ERROR:hasla nie sa identyczne');
}
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )==false){
  exit('adres e-mail nie jest prawidlowy')
}
  















?>
