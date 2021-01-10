<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['B'] == '1') {
        if (file_exists('fine.txt')) {
            header('location: submitform.php');
        } else {
            header('location: homepage.php');
        }
    } else {
        header('location: 404.php');
    }
} else {
    header('location: 404.php');
}
?>