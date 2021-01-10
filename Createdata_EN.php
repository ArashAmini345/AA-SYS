<?php
  $lang_EN = fopen("lang_EN.lang", "w") or die("امکان ساخت فایل نبود.");
  $lang = "John Doe\n";
  fwrite($lang_EN, $lang);
  $lang = "Jane Doe\n";
  fwrite($lang_EN, $lang);
  fclose($lang_EN);
 header('location: EN\index.php');
?>