<html>
<head><title>MD5PASS</title></head>
<body>
  <form action="md5pass.php" method="post">
    <h3>ZASZYFRUJ SWE HASLO</h3><br>
    <input type="password" name="pass" value="<?php echo $_POST['pass'] ?>"><br>
    <input type="submit" value="SZYFRUJ"><br>
    <table><tr><td><?php

echo md5($_POST['pass']);
    ?>
    </td></tr></table>
    
  </form>
</body>
  
</html>

