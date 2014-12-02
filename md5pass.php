<html>
<head><title>MD5PASS</title></head>
<body>
  <form action="md5pass.php" method="post">
    <h3>ZASZYFRUJ SWE HASLO</h3><br>
    <input type="password" name="pass"><br>
    <input type="submit" value="SZYFRUJ"><br>
    <?php

echo md5($passw);
    ?>
    
  </form>
</body>
  
</html>

