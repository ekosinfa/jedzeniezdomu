<html>
<head><title>MD5PASS</title></head>
<body>
<div align="center">
  <form action="md5pass.php" method="post">
    <h3>ZASZYFRUJ SWE HASLO</h3><br>
    <img src="http://www3.pcmag.com/media/images/370203-hacker-cat.jpg?thumb=y">
    <input type="password" name="pass" value="<?php echo $_POST['pass'] ?>"><br>
    <input type="submit" value="SZYFRUJ"><br>
    <table><tr><td><?php

echo md5($_POST['pass']);
    ?>
    </td></tr></table>
    
  </form>
  </div>
</body>
  
</html>

