<?php
  $fine = fopen("fine.txt", "w") or die("امکان ساخت فایل نبود.");
  $txt = "John Doe\n";
  fwrite($fine, $txt);
  $txt = "Jane Doe\n";
  fwrite($fine, $txt);
  fclose($fine);
 header('location: /AA sys/index.php');
?>