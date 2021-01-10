<?php
$fh = fopen('installed.txt', 'a');
fwrite($fh, '<h1>تمام شد!</h1>');
fclose($fh);

unlink('installed.txt');
unlink('themeDark.txt');
unlink('themelight.txt');
header('location: /AA sys/delete_FA.php');
?>