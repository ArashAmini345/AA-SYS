<?php
$fh = fopen('lang_FA.lang', 'a');
fwrite($fh, '<h1>تمام شد!</h1>');
fclose($fh);

unlink('lang_FA.lang');
header('location: index.php');
?>