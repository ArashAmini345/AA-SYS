<?php
if (file_exists('lang_FA.lang')) {
    header('location: FA\index.php');
} else {
    if (file_exists('lang_EN.lang')) {
        header('location: EN\index.php');
    } else {
        header('location: lang.php');
    }
}
?>