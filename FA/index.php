<?php
if (file_exists('installed.txt')) {
    header('location: home.php');
} else {
    header('location: setup.php');
}
?>
