<?php
  $lang_FA = fopen("lang_FA.lang", "w") or die("امکان ساخت فایل نبود.");
  $lang = "John Doe\n";
  fwrite($lang_FA, $lang);
  $lang = "Jane Doe\n";
  fwrite($lang_FA, $lang);
  fclose($lang_FA);
 header('location: FA\index.php');
?>