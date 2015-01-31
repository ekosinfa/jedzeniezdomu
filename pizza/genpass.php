<?php
$genvalue = date("m Y d");
$pass=sha1($genvalue);
echo $pass;
?>
