<?php
  $installed = fopen("installed.txt", "w") or die("امکان ساخت فایل نبود.");
  $txt = "John Doe\n";
  fwrite($installed, $txt);
  $txt = "Jane Doe\n";
  fwrite($installed, $txt);
  fclose($installed);
 header('location: login.php');
?>